let deck = [];
let deck2 = [];
const button = document.querySelector(".main__button");
const method = document.querySelector(".main__method");
const before = document.querySelector(".result__before");
const after = document.querySelector(".result__after");
const text = document.querySelectorAll(".result__text");
const arrow = document.querySelector(".result__arrow");
const caution = document.querySelector(".result__caution");
button.addEventListener("click", () => {
    text[0].className = "result__text";
    text[1].className = "result__text";
    arrow.className = "result__arrow";
    caution.innerText = "";
    const deckNum = document.querySelector(".main__deck").value;
    const deckTime = document.querySelector(".main__time").value;
    deck = [];
    deck2 = [];
    before.innerHTML = "";
    after.innerHTML = "";
    for (let i = 0; i < deckNum; i++) {
        deck.push(i + 1);
        let p = document.createElement("p");
        p.innerText = deck[i];
        p.className = "result__card";
        before.appendChild(p);
    }
    for (let j = 0; j < deckTime; j++) {
        if (method.value === "deal5") {
            for (let k = 0; k < 5; k++) {
                let deal = [];
                for (let l = 0; l < Math.ceil(deck.length / 5); l++) {
                    if (deck[l * 5 + k] !== undefined) {
                        deal.push(deck[l * 5 + k]);
                    }
                }
                for (let m = 0; m < deal.length; m++) {
                    deck2.push(deal[m]);
                }
            }
            deck = [];
            for (let n = 0; n < deck2.length; n++) {
                deck.push(deck2[n]);
            }
            deck2 = [];
            console.log(deck);
        } else if (method.value === "deal8") {
            for (let k = 0; k < 8; k++) {
                let deal = [];
                for (let l = 0; l < Math.ceil(deck.length / 8); l++) {
                    if (deck[l * 8 + k] !== undefined) {
                        deal.push(deck[l * 8 + k]);
                    }
                }
                for (let m = 0; m < deal.length; m++) {
                    deck2.push(deal[m]);
                }
            }
            deck = [];
            for (let n = 0; n < deck2.length; n++) {
                deck.push(deck2[n]);
            }
            deck2 = [];
            console.log(deck);
        } else if (method.value === "hindu") {
            let hindu = deck.splice(Math.ceil((deck.length + Math.floor(Math.random() * 20 - 10)) / 4), Math.ceil((deck.length + Math.floor(Math.random() * 20 - 10)) / 2));
            let hindu2 = hindu.splice(0, Math.ceil((hindu.length + Math.floor(Math.random() * (hindu.length / 2))) / 2));
            deck = hindu2.concat(deck);
            let hindu3 = hindu.splice(0, Math.ceil((hindu.length + Math.floor(Math.random() * (hindu.length / 2))) / 2));
            deck = hindu3.concat(deck);
            deck = hindu.concat(deck);
            console.log(deck);
        } else if (method.value === "farrow") {
            let odd = deck.filter(function (num) {
                return num % 2 === 1
            });
            let even = deck.filter(function (num) {
                return num % 2 === 0
            });
            deck2 = odd.concat(even);
            deck = deck2;
        } else if (method.value === "riffle") {
            let odd = [];
            let even = [];
            for (let i = 0; i < deck.length; i++) {
                if (i % 2 === 0) {
                    odd.push(deck[i]);
                } else {
                    even.push(deck[i]);
                }
            }
            deck2 = odd.concat(even);
            deck = deck2;
            deck2 = [];
            caution.innerText = "ショットガンシャッフルはカードを痛めるZE!!";
        }
    }
    for (let i = 0; i < deckNum; i++) {
        let p = document.createElement("p");
        p.innerText = deck[i];
        p.className = "result__card";
        after.appendChild(p);
    }
})