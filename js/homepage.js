const more = document.getElementById("more");
const dots = document.getElementById("dots");
const read = document.getElementById("read");

const more1 = document.getElementById("more1");
const dots1 = document.getElementById("dots1");
const read1 = document.getElementById("read1");

const more2 = document.getElementById("more2");
const dots2 = document.getElementById("dots2");
const read2 = document.getElementById("read2");

let isRead = false; // false = read more enabed, true = read less enabed
let isRead1 = false;
let isRead2 = false;

//Defalut behaviour
more.style.display = "none";
dots.style.display = "inline";
read.innerHTML = "Read More";

more1.style.display = "none";
dots1.style.display = "inline";
read1.innerHTML = "Read More";

more2.style.display = "none";
dots2.style.display = "inline";
read2.innerHTML = "Read More";

read.addEventListener("click", () => {
  if (!isRead) {
    more.style.display = "inline";
    dots.style.display = "none";
    read.innerHTML = "Read Less";
    isRead = true;
  } else {
    more.style.display = "none";
    dots.style.display = "inline";
    read.innerHTML = "Read More";
    isRead = false;
  }
});

read1.addEventListener("click", () => {
  if (!isRead1) {
    console.log("hello");
    more1.style.display = "inline";
    dots1.style.display = "none";
    read1.innerHTML = "Read Less";
    isRead1 = true;
  } else {
    more1.style.display = "none";
    dots1.style.display = "inline";
    read1.innerHTML = "Read More";
    isRead1 = false;
    console.log("false");
  }
});

read2.addEventListener("click", () => {
  if (!isRead2) {
    console.log("hello");
    more2.style.display = "inline";
    dots2.style.display = "none";
    read2.innerHTML = "Read Less";
    isRead2 = true;
  } else {
    more2.style.display = "none";
    dots2.style.display = "inline";
    read2.innerHTML = "Read More";
    isRead2 = false;
    console.log("false");
  }
});