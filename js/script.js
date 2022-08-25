
window.onload = () => {
  const warningEl = document.getElementById('warning');
  const videoElement = document.getElementById('videoElement');
  const captureBtn = document.getElementById('captureBtn');
  const startBtn = document.getElementById('startBtn');
  const stopBtn = document.getElementById('stopBtn');
  const download = document.getElementById('download');
  const audioToggle = document.getElementById('audioToggle');
  const micAudioToggle = document.getElementById('micAudioToggle');
  const controlArea1 = document.getElementById('control-area1');
  const controlArea2 = document.getElementById('control-area-afterrec');
  const inputGroupCheckbox = document.getElementById('mycheckbox');
  const inputGroupCheckbox1 = document.getElementById('mycheckbox1');
  const titleCaption = document.getElementById('titleCaption');
  const mainTitle = document.getElementById("title");
  const newRec = document.getElementById('newRec');

  if('getDisplayMedia' in navigator.mediaDevices) warningEl.style.display = 'none';

  let blobs;
  let blob;
  let rec;
  let stream;
  let voiceStream;
  let desktopStream;
  
  const mergeAudioStreams = (desktopStream, voiceStream) => {
    const context = new AudioContext();
    const destination = context.createMediaStreamDestination();
    let hasDesktop = false;
    let hasVoice = false;
    if (desktopStream && desktopStream.getAudioTracks().length > 0) {
      // If you don't want to share Audio from the desktop it should still work with just the voice.
      const source1 = context.createMediaStreamSource(desktopStream);
      const desktopGain = context.createGain();
      desktopGain.gain.value = 0.7;
      source1.connect(desktopGain).connect(destination);
      hasDesktop = true;
    }
    
    if (voiceStream && voiceStream.getAudioTracks().length > 0) {
      const source2 = context.createMediaStreamSource(voiceStream);
      const voiceGain = context.createGain();
      voiceGain.gain.value = 0.7;
      source2.connect(voiceGain).connect(destination);
      hasVoice = true;
    }
      
    return (hasDesktop || hasVoice) ? destination.stream.getAudioTracks() : [];
  };

  /**
   * CLICK ON GET STARTED BUTTON
   */
  captureBtn.onclick = async () => {

    download.style.display = 'none';
    const audio = audioToggle.checked || false;
    const mic = micAudioToggle.checked || false;
    
    desktopStream = await navigator.mediaDevices.getDisplayMedia({ video:true, audio: audio });
    
    if (mic === true) {
      voiceStream = await navigator.mediaDevices.getUserMedia({ video: false, audio: mic });
    }
  
    const tracks = [
      ...desktopStream.getVideoTracks(), 
      ...mergeAudioStreams(desktopStream, voiceStream)
    ];
    
    console.log('Tracks to add to stream', tracks);
    stream = new MediaStream(tracks);
    console.log('Stream', stream)
    videoElement.srcObject = stream;
    videoElement.muted = true;
      
    blobs = [];
  
    rec = new MediaRecorder(stream, {mimeType: 'video/webm; codecs=vp8,opus'});
    rec.ondataavailable = (e) => blobs.push(e.data);
    rec.onstop = async () => {

    
      
      //blobs.push(MediaRecorder.requestData());
      blob = new Blob(blobs, {type: 'video/webm'});
      let url = window.URL.createObjectURL(blob);
      download.href = url;
      download.download = 'Capture Me - Free Screen Recording Software.webm';
      download.style.display = 'block';
    
    };

    /* hide the control area*/ 
    controlArea1.style.display = "none";

    /* Show Start Recording button*/
    startBtn.style.display = "block";

    startBtn.disabled = false;
    captureBtn.disabled = true;
    audioToggle.disabled = true;
    micAudioToggle.disabled = true;


  };

   

  startBtn.onclick = () => {
    startBtn.disabled = true;
    stopBtn.disabled = false;
    rec.start();

    /* Hide Start Recording button*/
    startBtn.style.display = "none";

     /* show stop Recording button*/
     stopBtn.style.display = "block";

     titleCaption.innerHTML = "Recording in progress... | Capture Me - Free Screen Recording Software";

  };

  stopBtn.onclick = () => {
    rec.stop();
    captureBtn.disabled = false;
    audioToggle.disabled = false;
    micAudioToggle.disabled = false;
    startBtn.disabled = true;
    stopBtn.disabled = true;
    
     /* Hide Stop Recording button*/
    stopBtn.style.display = "none";
    titleCaption.innerHTML = "Your video is ready to download | Capture Me - Free Screen Recording Software";
    newRec.style.display = "block";

    /* show control area */
    // controlArea1.style.display = "block";

    stream.getTracks().forEach(s=>s.stop())
    videoElement.srcObject = null
    stream = null;
  };
};



