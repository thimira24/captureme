const rewire = require("rewire")
const script = rewire("../script")
const showControlArea = script.__get__("showControlArea")
// @ponicode
describe("showControlArea", () => {
    test("0", () => {
        let result = showControlArea()
        expect(result).toMatchSnapshot()
    })
})
