/**
 * Created by Peter Bartlett on 8/30/2016.
 */

describe("Roman Numeral Conversion Tests", function () {
    it("should return I for 1", function () {
        expect(toRoman(1)).toEqual('I');
    });

    it("should return II for 2", function () {
        expect(toRoman(2)).toEqual('II');
    })

    it("should return IV for 4", function () {
        expect(toRoman(4)).toEqual('IV');
    })

    it("should return V for 5", function () {
        expect(toRoman(5)).toEqual('V');
    })

    it("should return VI for 6", function () {
        expect(toRoman(6)).toEqual('VI');
    })

    it("should return IX for 9", function () {
        expect(toRoman(9)).toEqual('IX');
    })

    it("should return X for 10", function () {
        expect(toRoman(10)).toEqual('X');
    })

    it("should return XI for 11", function () {
        expect(toRoman(11)).toEqual('XI');
    })

    it("should return XX for 20", function () {
        expect(toRoman(20)).toEqual('XX');
    })

    it("should return L for 50", function () {
        expect(toRoman(50)).toEqual('L');
    })

    it("should return C for 100", function () {
        expect(toRoman(100)).toEqual('C');
    })

    it("should return D for 500", function () {
        expect(toRoman(500)).toEqual('D');
    })

    it("should return M for 1000", function () {
        expect(toRoman(1000)).toEqual('M');
    })

    it("should return MCMXC for 1990", function () {
        expect(toRoman(1990)).toEqual('MCMXC');
    })

    it("should return MMVIII for 2008", function () {
        expect(toRoman(2008)).toEqual('MMVIII');
    })

    it("should return MCMXCIX for 1999", function () {
        expect(toRoman(1999)).toEqual('MCMXCIX');
    })
});

describe('toThrowError test case', function () {
    it('should throw error for arabic numerals >3999', function () {
        expect(function () {
            toRoman(4000)
        }).toThrowError("You must use arabic numerals <3999");
    });

});




