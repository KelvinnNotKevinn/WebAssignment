const openShopping = document.querySelector(".shopping");
    const closeShopping = document.querySelector(".closeShopping");
    const list = document.querySelector(".list");
    const listProduct = document.querySelector(".listProduct");
    const total = document.querySelector(".total");
    const body = document.querySelector("body");
    const quantity = document.querySelector(".quantity");
	const addToCartButton = document.querySelector(".checkOut .total");

    openShopping.addEventListener("click", () => {
        body.classList.add("active");
    });
    closeShopping.addEventListener("click", () => {
        body.classList.remove("active");
    });

    let products = [
        {
            id: 1,
            name: "G203 LIGHTSYNC",
            desc: "Make the most of play time with G203—a gaming mouse in a variety of vibrant colors.",
            img: "g203.png",
            price: 73
        },
        {
            id: 2,
            name: "G305 LIGHTSPEED",
            desc: "LIGHTSPEED wireless gaming mouse designed for serious performance with latest technology innovations.",
            img: "g305ls.png",
            price: 139
        },
        {
            id: 3,
            name: "G502 HERO",
            desc: "Engineered for advanced gaming performance. G502 HERO features HERO 25K gaming sensor.",
            img: "g502hr.png",
            price: 169
        },
		{
			id: 4,
			name: "G413 SE",
			desc: "From tactile mechanical switches to 6-key rollover anti-ghosting and PBT keycap to compete.",
			img: "g413.png",
			price: 271
		},
		{
			id: 5,
			name: "G213 PRODIGY",
			desc: "Durable with gaming-grade performance. Tactile Mech-Dome keyswitches are spill-resistant.",
			img: "g213.png",
			price: 179
		},
		{
			id: 6,
			name: "PRO X TKL",
			desc: "A championship-trusted wireless gaming keyboard designed for the highest levels of competitive play.",
			img: "prox.png",
			price: 799
		},
		{
			id: 7,
			name: "G335 Gaming Headset",
			desc: "A lightweight, cool wired headset made with a suspension headband design with an adjustable strap.",
			img: "g335.png",
			price: 260
		},
		{
			id: 8,
			name: "G733 Wireless Headset",
			desc: "Wireless gaming headset designed for performance and comfort. Outfitted with all the surround sound.",
			img: "g733.png",
			price: 600
		},
		{
			id: 9,
			name: "PRO X 2 LIGHTSPEED",
			desc: "Designed with pros for the highest levels of competition. Wireless and built with the highest quality material.",
			img: "prox2.png",
			price: 1214
		},
    ];

    let listProducts = [];
    const initApp = () => {
        products.forEach((value, key) => {
            let newDiv = document.createElement("div");
            newDiv.classList.add("item");
            newDiv.innerHTML = `
                <img src="${value.img}">
                <div class="title">${value.name}</div>
                <div class="desc">${value.desc}</div>
                <div class="price">RM ${value.price.toLocaleString()}</div>
                <button class="btn" onclick="addToCart(${key})">Add to Cart</button>`;
            list.appendChild(newDiv);
        });
    };

    initApp();
	
	const addToCart = (key) => {
		if(listProducts[key] == null){
			listProducts[key] = products[key];
			listProducts[key].quantity = 1;
		}
		
		reloadProduct();
	}
	
	const reloadProduct = () =>{
		listProduct.innerHTML = "";
		let count = 0;
		let totalPrice = 0;
		
		listProducts.forEach((value, key) => {
			totalPrice = totalPrice + (value.quantity * products[key].price);
			count = count + value.quantity;
			
			if(value != null){
				let newDiv = document.createElement("li");
				newDiv.innerHTML = `
					<div><img src=${value.img}></div>
					<div class ="productTitle">${value.name}</div>
					<div class ="productPrice">RM ${(value.quantity*products[key].price).toLocaleString()}</div>
					
					<div>
						<button style="background-color: purple;"
						class="productButton" onclick = "changeQuantity(${key},
						${value.quantity - 1})">-</button>
						<div class="count">${value.quantity}</div>
						<button style="background-color: purple"
						class="productButton" onclick = "changeQuantity(${key},
						${value.quantity + 1})">+</button>
					</div>
				`;
				listProduct.appendChild(newDiv);
			}
		});
		total.innerText = totalPrice.toLocaleString();
		quantity.innerText = count;
		addToCartButton.innerText = `CHECKOUT : RM ${totalPrice.toLocaleString()}`;
	};
	
	const changeQuantity = (key,quantity)=>{
		if(quantity === 0){
			delete listProducts[key];
		}
		else{
			listProducts[key].quantity = quantity;
		}
		reloadProduct();
	};
	
