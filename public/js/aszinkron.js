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
}