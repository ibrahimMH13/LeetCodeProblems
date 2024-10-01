

export class RandomizedSet{

	#map;
	#list;

	constructor(){
		this.#map = {};
		this.#list = [];
	}


	insert(value){

		if(this.#map.hasOwnProperty(value)) return false;

		this.#map[value] = this.#list.length;

		this.#list.push(value);

		return true;
	}

	remove(value){

		if (!this.#map.hasOwnProperty(value)) return false;

		let dIndex = this.#map[value];
		
		let lastEle = this.#list[this.#list.length - 1];

		if(dIndex !== this.#list.length -1){

			this.#map[value] = dIndex;

			this.#list[dIndex] = lastEle;

		}

		this.#list.pop();

		delete this.#map[value];

		return true;

	}

	Random(){

		let rand = Math.floor(Math.random() * this.#list.length);
		return this.#list[rand];
	}
}

