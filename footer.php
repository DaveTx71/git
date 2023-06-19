<footer>

    <footer class="text-light">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-md-6">
                    <h5>Información</h5>
                    <ul>
                        <li><a href="acercadenosotros.php">Conócenos</a></li>
                        <li><a href="login.php">Iniciar sesión</a></li>
                        <li><a href="contactenos.php">Contáctenos</a></li>
                        <li>Sección de noticias y actualizaciones</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>Síguenos en redes sociales</h5>
                    <ul class="list-inline footericons img">
                        <li class="list-inline-item"><a href="https://www.instagram.com/"><img src="img/instagram.png"
                                    alt="Instagram Logo" width="50"></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/"><img src="img/facebook.png"
                                    alt="Facebook Logo" width="50"></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/"><img src="img/twitter.png"
                                    alt="Twitter Logo" width="50"></a></li>
                        <li class="list-inline-item"><a href="https://www.youtube.com/"><img src="img/youtube.png"
                                    alt="Youtube Logo" width="50"></a></li>
                    </ul>
                </div>
                <div class="col-md-12 text-center">
                    <hr class="bg-light">
                    <p>Todos los derechos reservados &copy; 2023</p>
                </div>
            </div>
        </div>
    </footer>


</footer>

<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>src = "js/inmueble.js"</script>
<script src="js/listaUsuarios.js"></script>
<script src="js/nuevoUsuario.js"></script>
<script src="js/listaPropiedades.js"></script>



<script>
    const testimonialsContainer = document.querySelector('.testimonials-container')
    const testimonial = document.querySelector('.testimonial')
    const userImage = document.querySelector('.user-image')
    const username = document.querySelector('.username')
    const role = document.querySelector('.role')

    const testimonials = [
        {
            name: 'David Gonzalez',
            position: 'Marketing',
            photo:
                'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=707b9c33066bf8808c934c8ab394dff6',
            text:
                "Me ha encantado el trato que me dieron en la emnpresa",
        },
        {
            name: 'Juan Perez',
            position: 'Software Engineer',
            photo: 'https://randomuser.me/api/portraits/women/44.jpg',
            text:
                'Muchas gracias por ayudarme a la eleccion de mi hogar, estoy muy satifecho!',
        },
    ]

    let idx = 0
    const intervalTime = 10000 // tiempo en milisegundos

    function updateTestimonial() {
        const { name, position, photo, text } = testimonials[idx]

        testimonial.innerHTML = text
        userImage.src = photo
        username.innerHTML = name
        role.innerHTML = position

        idx++

        if (idx > testimonials.length - 1) {
            idx = 0
        }
    }

    setInterval(updateTestimonial, intervalTime)

</script>





<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>

</body>


</html>