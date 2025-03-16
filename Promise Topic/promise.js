console.log("Start");

const Compte = new Promise((resolve, reject) => {
    let success = true;

    setTimeout(() => {
        if (success) {
            resolve("done");
        } else {
            reject("Not done");
        }
    }, 2000); 
});

console.log(Compte); 

Compte
    .then((message) => {
        console.log(message); 
    })
    .catch((error) => {
        console.error(error); 
    });

console.log("END");
