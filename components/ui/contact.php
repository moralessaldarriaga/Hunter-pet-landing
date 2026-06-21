<section class="w-full bg-white py-20 bg-[linear-gradient(180deg,rgba(255,255,255,1)_50%,rgba(255,241,242,.4)_100%)]" id="contact">
    <div class="w-full max-w-7xl mx-auto px-4 flex flex-col items-center">
        <div class="inline-flex items-center mx-auto gap-2 px-6 py-3 rounded-3xl bg-[rgb(237_28_63_/_10%)] text-[#ED1C3F] font-raleway font-bold text-xl">
            Contáctanos
        </div>
        <h2 class="text-[#18181B] mt-5 font-raleway font-extrabold text-[40px] leading-none"><span class="text-[#ED1C3F]">Protege</span> a tu mejor amigo <span class="text-[#ED1C3F]">desde hoy</span></h2>
        <p class="text-[#52525C] mt-4 font-inter font-normal text-lg">
            Déjanos tus datos y nos comunicaremos contigo.
        </p>
        <form id="formSend" action="send-mail.php" method="POST" class="max-w-[840px] bg-white grid grid-cols-3 gap-4 mt-7 px-9 py-10 border-1 border-[#F4F4F5] rounded-3xl shadow-[0_25px_50px_-12px_#ED1C3F33]">
            <div class="flex flex-col gap-2">
                <label for="type" class="font-inter font-medium text-sm text-[#3F3F47]">Tipo de documento*</label>
                <select required name="type" id="type" class="form-valid appearance-none w-full p-4 rounded-2xl border-1 border-[#E4E4E7] bg-white text-[#0A0A0A80] text-base font-inter focus:outline-none ">
                    <option value="0" selected default>Selecciona...</option>
                    <option value="1">DNI</option>
                    <option value="2">Pasaporte</option>
                </select>
                <span id="typeErr" class="hidden text-xs text-red-500 font-inter"></span>
            </div> 
            <div class="flex flex-col gap-2">
                <label for="document" class="font-inter font-medium text-sm text-[#3F3F47]">Número de documento*</label>
                <input required minlength="8" maxlength="9" placeholder="Ingresa tu número de documento" type="text" name="document" id="document" class="form-valid w-full p-4 rounded-2xl border-1 border-[#E4E4E7] bg-white text-[#0A0A0A80] text-base font-inter focus:outline-none " />
                <span id="documentErr" class="hidden text-xs text-red-500 font-inter"></span>
            </div>  
            <div class="flex flex-col gap-2">
                <label for="phone" class="font-inter font-medium text-sm text-[#3F3F47]">Número de celular*</label>
                <input required minlength="9" maxlength="9" placeholder="+51 ..." type="tel" name="phone" id="phone" class="form-valid w-full p-4 rounded-2xl border-1 border-[#E4E4E7] bg-white text-[#0A0A0A80] text-base font-inter focus:outline-none " />
                <span id="phoneErr" class="hidden text-xs text-red-500 font-inter"></span>
            </div> 
            <div class="flex flex-col gap-2">
                <label for="name" class="font-inter font-medium text-sm text-[#3F3F47]">Nombre*</label>
                <input required minlength="4" maxlength="50" placeholder="Ingresa tu nombre" type="text" name="name" id="name" class="form-valid w-full p-4 rounded-2xl border-1 border-[#E4E4E7] bg-white text-[#0A0A0A80] text-base font-inter focus:outline-none " />
                <span id="nameErr" class="hidden text-xs text-red-500 font-inter"></span>
            </div> 
            <div class="flex flex-col gap-2">
                <label for="lastname" class="font-inter font-medium text-sm text-[#3F3F47]">Apellidos*</label>
                <input required minlength="4" maxlength="100" placeholder="Ingresa tu nombre" type="text" name="lastname" id="lastname" class="form-valid w-full p-4 rounded-2xl border-1 border-[#E4E4E7] bg-white text-[#0A0A0A80] text-base font-inter focus:outline-none " />
                <span id="lastnameErr" class="hidden text-xs text-red-500 font-inter"></span>
            </div>
            <div class="flex flex-col gap-2">
                <label for="mail" class="font-inter font-medium text-sm text-[#3F3F47]">Correo*</label>
                <input required minlength="1" maxlength="100" placeholder="tucorreo@ejemplo.com" type="email" name="mail" id="mail" class="form-valid w-full p-4 rounded-2xl border-1 border-[#E4E4E7] bg-white text-[#0A0A0A80] text-base font-inter focus:outline-none " />
                <span id="mailErr" class="hidden text-xs text-red-500 font-inter"></span>
            </div>   
            <div class="flex flex-col gap-2 col-span-3">
                <label for="message" class="font-inter font-medium text-sm text-[#3F3F47]">Mensaje (opcional)</label>
                <textarea placeholder="Cuéntanos sobre tu mascota..." name="message" id="message" class="w-full min-h-[120px] p-4 resize-none field-sizing-content rounded-2xl border-1 border-[#E4E4E7] bg-white text-[#0A0A0A80] text-base font-inter focus:outline-none "></textarea>
            </div>
            <div class="flex flex-col gap-2 col-span-3">
                <label class="flex items-center gap-3 cursor-pointer select-none">
                    <div class="relative">
                        <!-- Hidden native checkbox, marked as peer -->
                        <input required id="terms" type="checkbox" class="sr-only peer" />
                        
                        <!-- Custom checkbox box -->
                        <div class="w-6 h-6 border-2 border-gray-300 rounded-md bg-white transition-all duration-200 ease-in-out 
                                    peer-checked:bg-red-600 peer-checked:border-red-600 peer-checked:scale-105
                                    ">
                        </div>
                        
                        <!-- Checkmark SVG with pop animation -->
                        <svg class="absolute w-4 h-4 text-white top-1 left-1 stroke-current fill-none stroke-[3] 
                                    scale-0 transition-transform duration-200 ease-out pointer-events-none
                                    peer-checked:scale-100 peer-checked:delay-100" 
                            viewBox="0 0 24 24">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    <span class="font-inter text-sm text-[#52525C] font-medium">Acepto los <a href="" class="text-[#ED1C3F] underline">términos y condiciones</a> y la <a href="" class="text-[#ED1C3F] underline">pólitica de privacidad</a>.</span>
                </label>
                <span id="termsErr" class="hidden text-xs text-red-500 font-inter"></span>
            </div>
            <div class="flex items-center justify-center gap-2 col-span-3">
                <button id="submitBtn" disabled type="submit" class="cursor-not-allowed opacity-75 flex items-center justify-center rounded-full gap-2 mt-4 w-[420px] p-5 bg-[#ED1C3F] font-raleway font-bold text-white transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <g clip-path="url(#clip0_2_359)">
                            <path d="M12.1133 18.0716C12.145 18.1505 12.2 18.2179 12.271 18.2646C12.3421 18.3113 12.4257 18.3352 12.5107 18.333C12.5957 18.3308 12.678 18.3027 12.7465 18.2524C12.815 18.2021 12.8666 18.1321 12.8941 18.0516L18.3108 2.2183C18.3375 2.14446 18.3426 2.06455 18.3255 1.98793C18.3084 1.9113 18.2698 1.84113 18.2143 1.78561C18.1588 1.7301 18.0886 1.69154 18.012 1.67446C17.9354 1.65737 17.8555 1.66246 17.7816 1.68913L1.94831 7.1058C1.86789 7.13338 1.79783 7.1849 1.74754 7.25344C1.69725 7.32199 1.66912 7.40428 1.66695 7.48926C1.66477 7.57425 1.68864 7.65787 1.73536 7.7289C1.78208 7.79993 1.84941 7.85497 1.92831 7.88663L8.53665 10.5366C8.74555 10.6203 8.93536 10.7453 9.09462 10.9043C9.25388 11.0633 9.3793 11.2529 9.46331 11.4616L12.1133 18.0716Z" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.2116 1.78906L9.09497 10.9049" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_2_359">
                                <rect width="20" height="20" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Enviar solicitud
                </button>
            </div>
        </form>
    </div>
</section>