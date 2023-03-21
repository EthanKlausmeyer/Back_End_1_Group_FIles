const fs = require("fs");

const filepath = "text.txt";

// write in file
fs.writeFile("text.txt", "This is an example of async",  (err) => {
    if (err) throw err;
    console.log('The file has been saved!');s
  });

// read a file

const data = fs.readFile(filepath, {encoding: "utf-8"}, (err, data) => (console.log(data)));

let sum = 0;
for(let i = 1; i <= 30; i++){
    sum = sum + 1;
}
console.log("Sum: ", sum);
