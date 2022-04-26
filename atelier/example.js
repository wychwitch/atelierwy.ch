let divide = function (a, b) {
    return a / b;
}

let mult = function (a, b) {
    return a * b;
}

function dynamicMath (a, b, f) {
    console.log(f(a, b));
}

dynamicMath(10, 2, mult); //20
dynamicMath(10, 2, divide); //5