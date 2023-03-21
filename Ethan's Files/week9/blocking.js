const fs = require("fs");

const filepath = "text.txt";

// write in file
fs.writeFileSync("text.txt", "This is an example of writesync");

// read a file

const data = fs.readFileSync(filepath, {encoding: "utf-8"});

console.log(data);

let sum = 0;
for(let i = 1; i <= 30; i++){
    sum = sum + 1;
}
console.log("Sum: ", sum);
