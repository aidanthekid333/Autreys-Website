const express = require("express");
const slide = require('./Client/index_scripts.js');
const app = express();
const port = 5000;
const appName = "Autreys Website";


app.use(express.static("./Client"));
app.use(express.json());
app.use(slide);


app.all("*", (req,res) => {
    res.sendFile(__dirname, "/Client/404.html");
  });

app.listen(port, () => {
    console.log(`Server is running on Port ${port} for ${appName}`);
    console.log(`${__dirname}\\Client\\404.html`);
  });