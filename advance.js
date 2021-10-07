// define the time limit
let TIME_LIMIT = 30;

// define quotes to be used
let quotes_array = [
  "Income before securities transactions was up 10.8 percent from $13.49 million in 1982 to $14.95 million in 1983. Earnings per share (adjusted for a 10.5 percent stock dividend distributed on August 26) advanced 10 percent to $2.39 in 1983 from $2.17 in 1982. Earnings may rise for 7 years. Kosy, Klemin, and Bille began selling on May 23, 1964.",

  "The fastest typing speed ever, 216 words per minute, was achieved by 'Stella Pajunas-Garnand' from Chicago in 1946 in one minute on an IBM electric. As of 2005, writer 'Barbara Blackburn' was the fastest English language typist in the world, according to The Guinness Book of World Records.",

  "Their second store was founded in Renton on August 3, 1965. From 1964 to 1984, they opened more than 50 stores through out the country. As they expanded, 12 regional offices had to be organized. Each of these 12 regional offices had to be organized. Each of these 12 regions employs from 108 to 578 people.",

  'Two common terms used to describe a salesperson are "Farmer" and "Hunter". The reality is that most professional salespeople have a little of both. A hunter is often associated with aggressive personalities who use aggressive sales technique. In terms of sales methodology, a hunter refers to a person whose focus is on bringing in and closing deals.',

  "National headquarters employs 1,077 people. Carole owns 118 stores located in 75 cities ranging as far west as Seattle and as far east as Boston. She owns 46 stores south of the Mason-Dixon line and 24 stores north of Denver. Carole buys goods from 89 companies located in 123 countries and all 50 states. ",

  "Middle Ages at 500 AD—these dates can be used as rough guidelines for looking at trends in history. The people who lived during those time periods didn't say that they lived in a certain time period; no one living in Europe in 1922 would've called those the 'interwar years,' since no one knew that World War II was in the future.",

  "There is no way you can type this unmanageable, problematical, unaccomodating, troublesome, perplexing, formidable, uncooperative, intransigent description of a sentence in under 3 seconds.",

  'This is the, "most challenging," Typing Test ever created (In recent "memory").  The amount of punctuation is absolutely INCREDIBLE!!!!  And a bunch of the L O N G words are very, "drawn out with EmPhAsIs!"  {At least thats what almost everyone likes to think....}',

  "I personally can't admit to having difficulty in pronouncing any word in my native tongue, English. However, there is one word which, when it arises - and, in order that it might emerge correctly from my mouth - instinctively causes me to have a momentary hesitation before I say it. The word is 'Asthma'.",

  'There are among non-American speakers of English those who say it as "Athsma" i.e. with the "s" and the "th" sounds transposed. But then there are others like myself who adhere to saying the word (or should I say "trying to say the word"?) as it is actually spelled?. Bizarrely, WE are in error.',
];

// selecting required elements
let timer_text = document.querySelector(".curr_time");
let accuracy_text = document.querySelector(".curr_accuracy");
let error_text = document.querySelector(".curr_errors");
let cpm_text = document.querySelector(".curr_cpm");
let wpm_text = document.querySelector(".curr_wpm");
let quote_text = document.querySelector(".quote");
let input_area = document.querySelector(".input_area");
let restart_btn = document.querySelector(".restart_btn");
let cpm_group = document.querySelector(".cpm");
let wpm_group = document.querySelector(".wpm");
let error_group = document.querySelector(".errors");
let accuracy_group = document.querySelector(".accuracy");

let timeLeft = TIME_LIMIT;
let timeElapsed = 0;
let total_errors = 0;
let errors = 0;
let accuracy = 0;
let characterTyped = 0;
let current_quote = "";
let timer = null;
let a = Math.floor(Math.random() * (quotes_array.length - 1)) + 1;

function updateQuote() {
  quote_text.textContent = null;
  current_quote = quotes_array[a];

  // separate each character and make an element
  // out of each of them to individually style them
  current_quote.split("").forEach((char) => {
    const charSpan = document.createElement("span");
    charSpan.innerText = char;
    quote_text.appendChild(charSpan);
  });

  // roll over to the first quote
  if (quoteNo < quotes_array.length - 1) quoteNo++;
  else quoteNo = 0;
}

function processCurrentText() {
  // get current input text and split it
  curr_input = input_area.value;
  curr_input_array = curr_input.split("");

  // increment total characters typed
  characterTyped++;

  errors = 0;

  quoteSpanArray = quote_text.querySelectorAll("span");
  quoteSpanArray.forEach((char, index) => {
    let typedChar = curr_input_array[index];

    // character not currently typed
    if (typedChar == null) {
      char.classList.remove("correct_char");
      char.classList.remove("incorrect_char");

      // correct character
    } else if (typedChar === char.innerText) {
      char.classList.add("correct_char");
      char.classList.remove("incorrect_char");

      // incorrect character
    } else {
      char.classList.add("incorrect_char");
      char.classList.remove("correct_char");

      // increment number of errors
      errors++;
    }
  });

  // display the number of errors
  error_text.textContent = total_errors + errors;

  // update accuracy text
  let correctCharacters = characterTyped - (total_errors + errors);
  let accuracyVal = (correctCharacters / characterTyped) * 100;
  accuracy_text.textContent = Math.round(accuracyVal);

  // if current text is completely typed
  // irrespective of errors
  if (curr_input.length == current_quote.length) {
    updateQuote();

    // update total errors
    total_errors += errors;

    // clear the input area
    input_area.value = "";
  }
}

function startGame() {
  resetValues();
  updateQuote();

  // clear old and start a new timer
  clearInterval(timer);
  timer = setInterval(updateTimer, 1000);
}

function resetValues() {
  timeLeft = TIME_LIMIT;
  timeElapsed = 0;
  errors = 0;
  total_errors = 0;
  accuracy = 0;
  characterTyped = 0;
  quoteNo = 0;
  input_area.disabled = false;

  input_area.value = "";
  quote_text.textContent = "Click on the area below to start the game.";
  accuracy_text.textContent = 100;
  timer_text.textContent = timeLeft + "s";
  error_text.textContent = 0;
  restart_btn.style.display = "none";
  cpm_group.style.display = "none";
  wpm_group.style.display = "none";
}

function updateTimer() {
  if (timeLeft > 0) {
    // decrease the current time left
    timeLeft--;

    // increase the time elapsed
    timeElapsed++;

    // update the timer text
    timer_text.textContent = timeLeft + "s";
  } else {
    // finish the game
    finishGame();
  }
}

function finishGame() {
  // stop the timer
  clearInterval(timer);

  // disable the input area
  input_area.disabled = true;

  // show finishing text
  quote_text.textContent = "Click on restart to start typing";

  // display restart button
  restart_btn.style.display = "block";

  // calculate cpm and wpm
  cpm = Math.round((characterTyped / timeElapsed) * 60);
  wpm = Math.round((characterTyped / 5 / timeElapsed) * 60);

  // update cpm and wpm text
  cpm_text.textContent = cpm;
  wpm_text.textContent = wpm;

  // display the cpm and wpm
  cpm_group.style.display = "block";
  wpm_group.style.display = "block";

  if (wpm > 0 && wpm < 20) {
    wpm_group.style.backgroundColor = "#eb4841";
    wpm_group.style.color = "white";
    document.getElementById("item1").style.transform = "scale(1.3)";
    document.getElementById("item1").style.color = "black";
  } 
  else if (wpm >= 20 && wpm < 40) {
    wpm_group.style.backgroundColor = "#f48847";
    wpm_group.style.color = "white";
    document.getElementById("item2").style.transform = "scale(1.3)";
    document.getElementById("item2").style.color = "black";
  } 
  else if (wpm >= 40 && wpm < 60) {
    wpm_group.style.backgroundColor = "#ffc84a";
    wpm_group.style.color = "white";
    document.getElementById("item3").style.transform = "scale(1.3)";
    document.getElementById("item3").style.color = "black";
  }
   else if (wpm >= 60 && wpm < 80) {
    wpm_group.style.backgroundColor = "#a6c34c";
    wpm_group.style.color = "white";
    document.getElementById("item4").style.transform = "scale(1.3)";
    document.getElementById("item4").style.color = "black";
  }
   else if (wpm >= 80) {
    wpm_group.style.backgroundColor = "#4ec04e";
    wpm_group.style.color = "white";
    document.getElementById("item5").style.transform = "scale(1.3)";
    document.getElementById("item5").style.color = "black";
  }
}
