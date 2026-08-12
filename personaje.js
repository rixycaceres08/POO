class personaje {
    #nombre;
    #vida = 100;

    constructor(nombre) {
        this.#nombre = nombre;
    }

    get nombre() {
        return this.#nombre;
    }

    get vida() {
        return this.#vida;
    }

    atacar() {
        throw new Error("Debes implementar atacar()");
    }
}

class guerrero extends personaje {
    atacar() {
        console.log(`${this.nombre} ataca con espada: -20 de vida`);
    }
}

class mago extends personaje {
    atacar() {
        console.log(`${this.nombre} lanza una bola de fuego: -30 de vida`);
    }
}

const g = new guerrero("Thorin");
const m = new mago("Elandra");

const equipo = [g, m];
equipo.forEach(p => p.atacar());