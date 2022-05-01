function anagramTest(a, b){
    let arrayA = Array.from(a).sort();
    let arrayB = Array.from(b).sort();
    if (arrayA.length != arrayB.length){
        return false;
    }
    for(let i=0; i < arrayA.length; i++){
        if(arrayA[i] != arrayB[i]){
            return false;
        }
    }
    return true;
}

function palindromeTest(a){
    let A = a.toLowerCase();
    let B = Array.from(a.toLowerCase()).reverse().join("");
    console.log(B);

    if (A === B){
        return true;
    }
    return false;

}

function middleReturn(elementList){
    let i = Math.floor(elementList.length / 2);
    return [elementList[i], i];
}

function setReturn(a){
    let A = a.toLowerCase();
    let B = new Set();

    A.split("").forEach(letter => B.add(letter));
    return B;
}

function numCount(numArray){
    let counter = {};
    for(let i = 0; i < numArray.length; i++){
        if(counter[numArray[i]]){
            counter[numArray[i]]++;
        }
        else{
            counter[numArray[i]] = 1;
        }
        
    }
    return counter;
}

function reverseWords(phrase){
    let blaze = phrase.split(" ");
    return blaze.reverse().join(" ");
}

function commonLetters(a,b){
    let setA = new Set(Array.from(a));
    let setB = new Set(Array.from(b));
    let C = [];

    console.log(setA);
    setA.forEach((entry)=>{
        if (setB.has(entry)){
            C.push(entry);
        }
    });
    return C;
}


console.log(commonLetters("aaabbscs","abczc"));
console.log(reverseWords("banana boy"));
console.log(numCount([1,2,3,2,2,2,3,4,5]))

console.log(setReturn("aaahdhhhshhaaahhsdssd"))

console.log(palindromeTest("girafarig"))

console.log(anagramTest("dog","god"));

console.log(anagramTest("dog","cat"));