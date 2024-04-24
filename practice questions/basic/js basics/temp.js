function Person(firstname,lastname) {
    this.firstname = firstname;
    this.lastname = lastname;
}

const person1 = new Person("Jaymin","bhavsar");
const person2 = new Person("Ashu", "jha");

Person.prototype.fullname = function () {
    return this.firstname + this.lastname;
};

console.log(person1.fullname());
console.log(person2.fullname());
console.log(person1.prototype);