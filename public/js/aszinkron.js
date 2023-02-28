class Aszinkron {
    constructor(token) {
        this.token = token;
    }

    adatBe(vegpont, myCallBack) {
        console.log(vegpont);
        fetch(vegpont, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": this.token,
            },
        })
        .then((response) => response.json())
            .then((data) => {
                console.log(data);
                myCallBack(data);
        })
        .catch((error) => {
            console.log("Error:", error);
        });
    }

    adatUj(vegpont, adat) {
        fetch(vegpont, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": this.token,
            },
            body: JSON.stringify(adat),
        })
            .then((response) => response.json())
            .then((data) => {
                console.log("Új adat" + data);
            })
            .catch((error) => {
                console.log("Error:", error);
            });
    }
}

export default Aszinkron;