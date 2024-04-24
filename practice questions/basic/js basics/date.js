/*
    write a javascript program to display the current day and time in the following format
    Today is : Tuesday.
    Current time is : 10 PM : 30 : 38
*/

// let today=Date() gives only string 

// let today = new Date()

// let daylist = ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"]
// console.log(`Today is ${daylist[today.getDay()]}`);

// // let hours = today.getHours();
// let hours = 12;
// let minutes = today.getMinutes();
// let seconds = today.getSeconds();

// let polarity = (hours >= 12) ? "PM" : "AM";

// hours = (hours >= 12) ? hours - 12 : hours;
// console.log(hours);

// if (hours === 0 && polarity === "AM") {
//     hours = 12;
//     polarity = ""
// }
// if (hours === 0 && polarity === "PM") {
//     hours = 12;
//     polarity = ""
// }

// console.log(hours);
// console.log(polarity);
// console.log(`${hours} ${polarity} : ${minutes} : ${seconds}`);

function Persons(name, email) {
    this.name = name;
    this.email = email;
}

person1 = new Persons("ashutosh")
person2 = new Persons("ashutosh")
console.log(person1.name);

// const person1=
// Persons.prototype.email = "ashutosh";

// console.log(Persons.email);








