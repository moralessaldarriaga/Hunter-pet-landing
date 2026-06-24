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


    button.innerHTML = "Enviando...";


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


        button.disabled = false;


        button.classList.remove(
            "opacity-75",
            "cursor-not-allowed"
        );


        button.classList.add(
            "cursor-pointer"
        );


        button.innerHTML = `
            Enviar solicitud
        `;


    }


});