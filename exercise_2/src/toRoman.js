/**
 * Created by Peter Bartlett on 8/30/2016.
 */

function toRoman(arabic)
{
    if(arabic>3999) {
        var error = new Error('You must use arabic numerals <3999');
        error.name = 'ArgumentException';
        throw error;
    }

    var roman='';
    let arabicToRomanLookup = new Map([
        [1000, "M"],
        [900, "CM"],
        [500, "D"],
        [400, "CD"],
        [100, "C"],
        [90, "XC"],
        [50, "L"],
        [40, "XL"],
        [10, "X"],
        [9, "IX"],
        [5, "V"],
        [4, "IV"],
        [1, "I"]
    ]);

    for (let [arabicKey, romanNumeral] of arabicToRomanLookup) {
        while(arabic>=arabicKey) {
            roman = roman.concat(romanNumeral);
            arabic -= arabicKey;
        }
    }

    return roman;
}