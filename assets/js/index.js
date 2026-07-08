        
        const burguer = document.querySelector("#openMenu");

        burguer.addEventListener("click", function(){
            document.querySelector("#menuMobile").classList.toggle("hidden");
        
            burguer.children[0].classList.toggle("rotate-45");
            burguer.children[0].classList.toggle("-translate-y-2");
            burguer.children[1].classList.toggle("opacity-0");
            burguer.children[2].classList.toggle("-rotate-45");
            burguer.children[2].classList.toggle("translate-y-2");
        
        });
        
        document.querySelectorAll('[data-enlace]').forEach(link => {

            link.addEventListener('click', function(e){

                e.preventDefault();

                const target = document.querySelector(
                    this.getAttribute('href')
                );

                target.scrollIntoView({
                    behavior: 'smooth'
                });

            });

        });

        const form = document.querySelector("#formSend");

        const button = document.querySelector("#submitBtn");


        const fields = [

            "type",
            "document",
            "phone",
            "name",
            "lastname",
            "mail",
            "terms"

        ];


        // Campos que el usuario ya interactuó
        const touched = {};



        function showError(field, message){


            const input = document.querySelector(`#${field}`);

            const error = document.querySelector(`#${field}Err`);



            if(field !== "checkbox"){


                input.classList.add(
                    "border-red-500"
                );


                input.classList.remove(
                    "border-[#E4E4E7]"
                );


            }


            error.textContent = message;

            error.classList.remove(
                "hidden"
            );


        }


        function removeError(field){


            const input = document.querySelector(`#${field}`);

            const error = document.querySelector(`#${field}Err`);



            if(field !== "checkbox"){


                input.classList.remove(
                    "border-red-500"
                );


                input.classList.add(
                    "border-[#E4E4E7]"
                );


            }



            error.classList.add(
                "hidden"
            );


        }



        function validateField(field){


            const input = document.querySelector(`#${field}`);



            if(input.type === "checkbox"){


                if(!input.checked){


                    showError(
                        field,
                        "Debes aceptar los términos y condiciones"
                    );


                    return false;


                }


                removeError(field);

                return true;


            }




            if(input.tagName === "SELECT"){


                if(input.value === "0"){

                    showError(
                        field,
                        "Selecciona una opción válida"
                    );


                    return false;


                }


            }



            if(input.value.trim() === ""){


                showError(
                    field,
                    "Este campo es obligatorio"
                );


                return false;


            }



            if(
                input.minLength > 0 &&
                input.value.length < input.minLength
            ){


                showError(
                    field,
                    `Ingresa mínimo ${input.minLength} caracteres`
                );


                return false;


            }



            if(input.type === "email" && !input.checkValidity()){


                showError(
                    field,
                    "Ingresa un correo válido"
                );


                return false;


            }



            removeError(field);


            return true;


        }


        function validateForm(){


            let valid = true;


            fields.forEach(field => {


                const input = document.querySelector(`#${field}`);


                const isValid = input.checkValidity();


                if(field === "checkbox"){


                    if(!input.checked){

                        valid = false;

                    }


                }else{


                    if(!isValid || input.value === "0"){

                        valid = false;

                    }

                }


            });



            if(valid){


                button.disabled = false;


                button.classList.remove(
                    "opacity-75",
                    "cursor-not-allowed"
                );


                button.classList.add(
                    "cursor-pointer"
                );


            }else{


                button.disabled = true;


                button.classList.add(
                    "opacity-75",
                    "cursor-not-allowed"
                );


            }


        }


        fields.forEach(field => {


            const input = document.querySelector(`#${field}`);



            // Cuando entra al campo

            input.addEventListener(
                "focus",
                () => {

                    touched[field] = true;

                }
            );



            // Validar solo ese campo al salir

            input.addEventListener(
                "blur",
                () => {


                    touched[field] = true;


                    validateField(field);


                    validateForm();


                }
            );



            // Mientras escribe solo limpia si ya lo tocó

            input.addEventListener(
                "input",
                () => {


                    if(touched[field]){


                        validateField(field);


                    }


                    validateForm();


                }
            );



            input.addEventListener(
                "change",
                () => {


                    touched[field] = true;


                    validateField(field);


                    validateForm();


                }
            );


        });

        form.addEventListener("submit", async (e)=>{


            e.preventDefault();


            button.disabled = true;


            button.classList.add(
                "opacity-75",
                "cursor-not-allowed"
            );


            button.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <g clip-path="url(#clip0_2_359)">
                            <path d="M12.1133 18.0716C12.145 18.1505 12.2 18.2179 12.271 18.2646C12.3421 18.3113 12.4257 18.3352 12.5107 18.333C12.5957 18.3308 12.678 18.3027 12.7465 18.2524C12.815 18.2021 12.8666 18.1321 12.8941 18.0516L18.3108 2.2183C18.3375 2.14446 18.3426 2.06455 18.3255 1.98793C18.3084 1.9113 18.2698 1.84113 18.2143 1.78561C18.1588 1.7301 18.0886 1.69154 18.012 1.67446C17.9354 1.65737 17.8555 1.66246 17.7816 1.68913L1.94831 7.1058C1.86789 7.13338 1.79783 7.1849 1.74754 7.25344C1.69725 7.32199 1.66912 7.40428 1.66695 7.48926C1.66477 7.57425 1.68864 7.65787 1.73536 7.7289C1.78208 7.79993 1.84941 7.85497 1.92831 7.88663L8.53665 10.5366C8.74555 10.6203 8.93536 10.7453 9.09462 10.9043C9.25388 11.0633 9.3793 11.2529 9.46331 11.4616L12.1133 18.0716Z" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M18.2116 1.78906L9.09497 10.9049" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_2_359">
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg> Enviando ...`;


            const formData = new FormData(form);



            try {


                const response = await fetch(
                    "send-mail.php",
                    {
                        method:"POST",
                        body:formData
                    }
                );


                const data = await response.json();



                const dialog = document.querySelector("#successMessageForm");
                const message = dialog.querySelector("#messageTitle");
                const text = dialog.querySelector("#messageText");

                if(data.status === "success"){


                    message.textContent = data.title;
                    text.textContent = data.message;

                    dialog.showModal();

                    form.reset();


                }else{

                    message.textContent = data.title;
                    text.textContent = data.message;

                    dialog.showModal();


                }



            }catch(error){


                const dialog = document.querySelector("#successMessageForm");
                const message = dialog.querySelector("#messageTitle");
                const text = dialog.querySelector("#messageText");

                message.textContent =
                "¡Ocurrió un error!";
                text.textContent = "Tu mensaje no se pudo enviar. Por favor, inténtalo de nuevo más tarde.";

                dialog.showModal();

            }finally{

                console.log("finally");
                
                button.disabled = true;


                button.classList.add(
                    "opacity-75",
                    "cursor-not-allowed"
                );


                // button.classList.add(
                //     "cursor-pointer"
                // );


                button.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <g clip-path="url(#clip0_2_359)">
                            <path d="M12.1133 18.0716C12.145 18.1505 12.2 18.2179 12.271 18.2646C12.3421 18.3113 12.4257 18.3352 12.5107 18.333C12.5957 18.3308 12.678 18.3027 12.7465 18.2524C12.815 18.2021 12.8666 18.1321 12.8941 18.0516L18.3108 2.2183C18.3375 2.14446 18.3426 2.06455 18.3255 1.98793C18.3084 1.9113 18.2698 1.84113 18.2143 1.78561C18.1588 1.7301 18.0886 1.69154 18.012 1.67446C17.9354 1.65737 17.8555 1.66246 17.7816 1.68913L1.94831 7.1058C1.86789 7.13338 1.79783 7.1849 1.74754 7.25344C1.69725 7.32199 1.66912 7.40428 1.66695 7.48926C1.66477 7.57425 1.68864 7.65787 1.73536 7.7289C1.78208 7.79993 1.84941 7.85497 1.92831 7.88663L8.53665 10.5366C8.74555 10.6203 8.93536 10.7453 9.09462 10.9043C9.25388 11.0633 9.3793 11.2529 9.46331 11.4616L12.1133 18.0716Z" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M18.2116 1.78906L9.09497 10.9049" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_2_359">
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg> Enviar solicitud`;

            }


});