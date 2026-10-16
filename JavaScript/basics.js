// Variables 

let username = "Sanjay";
let age=23;
let isLearning = true;
let result;
let selectedValue = null;
let floatValue = 13.12;

console.log(username+" "
            + age + " " 
            + isLearning + " "
            + result + " " 
            + selectedValue + " "
            + floatValue);

console.log(typeof(username)+" "
            + typeof(age) + " " 
            + typeof(isLearning) + " "
            + typeof(result )+ " " 
            + typeof(selectedValue) + " "
            + typeof(floatValue)); 

// Ex : 1
let score = 10;
score = 15;
console.log(score);

// Ex : 2
const country = "India";
// country = "Japan";  
console.log(country); // Type Error Assignment to constant variable.

// Conditions
let marks = 76;

if(marks>=90){
    console.log("Grade A");
}
else if(marks >= 75){
    console.log("Grade B");
}
else if(marks >= 50){
    console.log("Grade C");
}
else{
    console.log("Fail");
}
