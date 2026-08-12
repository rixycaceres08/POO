class vehiculo {
    #marca;
    #velocidad = 0;

    constructor(marca) {
        this.#marca = marca ;
    }

    get velocidad() {
        return this.#velocidad;
        }

    acelerar() {
        throw new Error("Debes implementar acelelrar()");
    }
}    

    class carro extends vehiculo {
        #puertas = 4;

        acelerar() {
        console.log("Vrrum! 4 ruedas")
    }
}

class moto extends vehiculo {
    #tieneSidecar = false;

    acelerar(){
    console.log("Rrrapido!");
}
}

const c = new carro("Toyota");
const m = new moto ("Honda");

const flota = [c, m];
flota.forEach(v => {
    v.acelerar();
});
