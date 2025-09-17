document.addEventListener("DOMContentLoaded", function() {
  const sedes = {
  nicolasdefederman: {
    nombre: "CENTRO EDUCATIVO RURAL NICOLAS DE FEDERMAN",
    direccion: "Vda Humadea, Guamal",
    telefono: "(+57) 3138098754",
    correo: "nicolasdefederman.cernf@gmail.com",
    horario: "Lunes - Viernes de 7:00 am a 3:00 pm",
    mapa: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127391.16580395127!2d-73.750313!3d3.815709!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbfcc63cd5c45bfc4!2sEscuela%20Nicol%C3%A1s%20De%20Federman!5e0!3m2!1ses-419!2sco!4v1626629968744!5m2!1ses-419!2sco"
  },
  antoniojosedesucre: {
    nombre: "ESCUELA RURAL ANTONIO JOSE DE SUCRE",
    direccion: "Vda El Carmen, Guamal",
    telefono: "(+57) 3138098754",
    correo: "antoniojosedesucre.cernf@gmail.com",
    horario: "Lunes - Viernes de 7:00 am a 3:00 pm",
    mapa: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127383.91953737757!2d-73.771222!3d3.8642660000000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe46ff9a70b166b0b!2sEscuela%20Antonio%20Jos%C3%A9%20de%20Sucre!5e0!3m2!1ses-419!2sco!4v1626631048306!5m2!1ses-419!2sco"
  },
  eldanubio: {
    nombre: "ESCUELA RURAL EL DANUBIO",
    direccion: "Vda El Danubio, Guamal",
    telefono: "(+57) 3138098754",
    correo: "eldanubio.cernf@gmail.com",
    horario: "Lunes - Viernes de 7:00 am a 3:00 pm",
    mapa: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31847.565462354283!2d-73.73206!3d3.8218!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3e114ee5c9cec1%3A0xf647a21cccff11a9!2sVda.%20Verda%20El%20Danubio%2C%20Guamal%2C%20Meta!5e0!3m2!1ses-419!2sco!4v1626631149468!5m2!1ses-419!2sco"
  },
  elencanto: {
    nombre: "ESCUELA RURAL EL ENCANTO",
    direccion: "Vda El Encanto, Guamal",
    telefono: "(+57) 3138098754",
    correo: "elencanto.cernf@gmail.com",
    horario: "Lunes - Viernes de 7:00 am a 3:00 pm",
    mapa: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31844.644460626714!2d-73.746104!3d3.8996739999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1ef8aae1a1502cc8!2sEscuela%20El%20Encanto!5e0!3m2!1ses-419!2sco!4v1626631269893!5m2!1ses-419!2sco"
  },
  elretiro: {
    nombre: "ESCUELA RURAL EL RETIRO",
    direccion: "Vda El Retiro, Guamal",
    telefono: "(+57) 3138098754",
    correo: "elretiro.cernf@gmail.com",
    horario: "Lunes - Viernes de 7:00 am a 3:00 pm",
    mapa: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d254745.26731848248!2d-73.92494340369002!3d3.9387020623981868!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x430e6cb28c41025c!2sEl%20Retiro!5e0!3m2!1ses-419!2sco!4v1626633139963!5m2!1ses-419!2sco"
  },
  laisla: {
    nombre: "ESCUELA RURAL LA ISLA",
    direccion: "Vda La Isla, Guamal",
    telefono: "(+57) 3138098754",
    correo: "laisla.cernf@gmail.com",
    horario: "Lunes - Viernes de 7:00 am a 3:00 pm",
    mapa: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31844.62339392783!2d-73.81748!3d3.9002300000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3e156792d4917d%3A0x2c711cc865896f25!2sVda.%20La%20Isle%2C%20Guamal%2C%20Meta!5e0!3m2!1ses-419!2sco!4v1626631412578!5m2!1ses-419!2sco"
  },
  lapaz: {
    nombre: "ESCUELA RURAL LA PAZ",
    direccion: "Vda La Paz, Guamal",
    telefono: "(+57) 3138098754",
    correo: "lapaz.cernf@gmail.com",
    horario: "Lunes - Viernes de 7:00 am a 3:00 pm",
    mapa: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31846.84813516459!2d-73.75236!3d3.84107!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3e141c8b747f0f%3A0x300610ec67542138!2sVda.%20La%20Paz%2C%20Guamal%2C%20Meta!5e0!3m2!1ses-419!2sco!4v1626631506361!5m2!1ses-419!2sco"
  },
  montecristo: {
    nombre: "ESCUELA RURAL MONTECRISTO",
    direccion: "Vda Montecristo, Guamal",
    telefono: "(+57) 3138098754",
    correo: "montecristo.cernf@gmail.com",
    horario: "Lunes - Viernes de 7:00 am a 3:00 pm",
    mapa: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127384.7227143685!2d-73.800493!3d3.858914!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4f2d4c80b82cab9a!2sVereda%20Montecristo%2C%20Guamal%2C%20Meta!5e0!3m2!1ses-419!2sco!4v1626631929506!5m2!1ses-419!2sco"
  },
  orotoy: {
    nombre: "ESCUELA RURAL OROTOY",
    direccion: "Vda Orotoy, Guamal",
    telefono: "(+57) 3138098754",
    correo: "orotoy.cernf@gmail.com",
    horario: "Lunes - Viernes de 7:00 am a 3:00 pm",
    mapa: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127374.54758084082!2d-73.806676!3d3.9261779999999997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa5cce07dd1c5bc7d!2sEscuela%20Orotoy!5e0!3m2!1ses-419!2sco!4v1626630870878!5m2!1ses-419!2sco"
  },
  pioxii: {
    nombre: "ESCUELA RURAL PIO XII",
    direccion: "Vda Pio XII, Guamal",
    telefono: "(+57) 3138098754",
    correo: "pioxii.cernf@gmail.com",
    horario: "Lunes - Viernes de 7:00 am a 3:00 pm",
    mapa: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127378.6440653644!2d-73.790785!3d3.899237!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ab0b0dc65e800a5!2sEscuela%20P%C3%ADo%20XII!5e0!3m2!1ses-419!2sco!4v1626632281353!5m2!1ses-419!2sco"
  },
  sanpedro: {
    nombre: "ESCUELA RURAL SAN PEDRO",
    direccion: "Vda San Pedro, Guamal",
    telefono: "(+57) 3138098754",
    correo: "sanpedro.cernf@gmail.com",
    horario: "Lunes - Viernes de 7:00 am a 3:00 pm",
    mapa: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31845.199370805585!2d-73.83785!3d3.8850000000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3e153473fc317f%3A0xade4d5dfa61f97a1!2sVda.%20San%20Pedro%2C%20Guamal%2C%20Meta!5e0!3m2!1ses-419!2sco!4v1626632349514!5m2!1ses-419!2sco"
  },
  santaana: {
    nombre: "ESCUELA RURAL SANTA ANA",
    direccion: "Vda Santa Ana, Guamal",
    telefono: "(+57) 3138098754",
    correo: "santaana.cernf@gmail.com",
    horario: "Lunes - Viernes de 7:00 am a 3:00 pm",
    mapa: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3980.7015917002823!2d-73.739597!3d3.8740330000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x94258197cfcdc156!2sEscuela%20Santa%20Ana!5e0!3m2!1ses-419!2sco!4v1626632432356!5m2!1ses-419!2sco"
  },
  santabarbara: {
    nombre: "ESCUELA RURAL SANTA BARBARA",
    direccion: "Vda Santa Barbara, Guamal",
    telefono: "(+57) 3138098754",
    correo: "santabarbara.cernf@gmail.com",
    horario: "Lunes - Viernes de 7:00 am a 3:00 pm",
    mapa: "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127376.01692063946!2d-73.759666!3d3.916536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc69700695266e73a!2sCentro%20Educativo%20Santa%20B%C3%A1rbara!5e0!3m2!1ses-419!2sco!4v1626632515388!5m2!1ses-419!2sco"
  }
};

const select = document.getElementById("sede");
  const contenedor = document.getElementById("descripcion_contacto");

  // 👉 Mover "nicolasdefederman" al inicio y seleccionarlo
  const option = select.querySelector("option[value='nicolasdefederman']");
  if (option) {
    select.insertBefore(option, select.firstChild); 
    option.selected = true;
  }

  // 👉 Función para mostrar la info de una sede
  function mostrarSede(value) {
    if (sedes[value]) {
      const s = sedes[value];
      contenedor.innerHTML = `
        <div class="informacion_sede">
          <h1>${s.nombre}</h1>
          <p>
            <b>Dirección:</b> ${s.direccion}<br>
            <b>Teléfono:</b> ${s.telefono}<br>
            <b>Correo:</b> ${s.correo}<br>
            <b>Horario:</b> ${s.horario}
          </p>
          <iframe class="map box-img" src="${s.mapa}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      `;
    } else {
      contenedor.innerHTML = "";
    }
  }

  // 👉 Evento al cambiar de sede
  select.addEventListener("change", function() {
    mostrarSede(this.value);
  });

  // 👉 Mostrar "nicolasdefederman" de entrada
  mostrarSede("nicolasdefederman");
});