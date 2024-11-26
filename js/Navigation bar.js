const body = document.querySelector("body"),
		sidebar = body.querySelector(".sidebar"),
		toggle = body.querySelector(".toggle"),
		searchBtn = body.querySelector(".search-box"),
		modeSwtich = body.querySelector(".toggle-switch"),
		modeText = body.querySelector(".mode-text");
		
		toggle.addEventListener("click",() =>{
			sidebar.classList.toggle("close");
		});
		
		modeSwtich.addEventListener("click",() =>{
			body.classList.toggle("Light");
			
			if(body.classList.contains("Light")){
				modeText.innerText = "Dark Mode"
			}else{
				modeText.innerText = "Light Mode"
			}
		});