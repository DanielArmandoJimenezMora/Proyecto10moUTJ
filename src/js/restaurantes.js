;(function () {
  const restaurantesInput = document.querySelector('#restaurantes')

  if (restaurantesInput) {
    let restaurantes = []
    let restaurantesFiltrados = []

    const listadoRestaurantes = document.querySelector('#listado-restaurantes')
    const restaurateHidden = document.querySelector('[name="restaurante_id"]')

    obtenerRestaurantes()

    restaurantesInput.addEventListener('input', buscarRestaurantes)

    async function obtenerRestaurantes() {
      const url = `/api/restaurantes`

      const respuesta = await fetch(url)
      const resultado = await respuesta.json()

      formatearRestaurantes(resultado)
    }

    function formatearRestaurantes(arrayRestaurantes) {
      restaurantes = arrayRestaurantes.map((restaurante) => {
        return {
          nombre: `${restaurante.nombre.trim()} / ${restaurante.sucursal.trim()}`,
          id: restaurante.id,
        }
      })
    }
    function buscarRestaurantes(e) {
      const busqueda = e.target.value
      if (busqueda.length > 0) {
        const expresion = new RegExp(busqueda, 'i')
        restaurantesFiltrados = restaurantes.filter((restaurante) => {
          if (restaurante.nombre.toLowerCase().search(expresion) != -1) {
            return restaurante
          }
        })
      } else {
        restaurantesFiltrados = []
      }

      mostrarRestaurantes()

      function mostrarRestaurantes() {
        while (listadoRestaurantes.firstChild) {
          listadoRestaurantes.removeChild(listadoRestaurantes.firstChild)
        }

        if (restaurantesFiltrados.length > 0) {
          restaurantesFiltrados.forEach((restaurante) => {
            const restauranteHTML = document.createElement('LI')
            restauranteHTML.classList.add('listado-restaurantes__restaurante')
            restauranteHTML.textContent = restaurante.nombre
            restauranteHTML.dataset.restauranteId = restaurante.id
            restauranteHTML.onclick = selecccionarRestaurante

            //añadir al DOM
            listadoRestaurantes.appendChild(restauranteHTML)
          })
        } else {
          // Imagen
          const noResultadosImg = document.createElement('DIV')
          noResultadosImg.classList.add('listado-restaurantes__no-resultado')
          listadoRestaurantes.appendChild(noResultadosImg)
          const image = document.createElement('img')
          image.src = '/../build/img/noData.gif'
          document
            .querySelector('.listado-restaurantes__no-resultado')
            .appendChild(image)
          // Parrafo
          const noResultados = document.createElement('P')
          noResultados.classList.add('listado-restaurantes__no-resultado--p')
          noResultados.textContent = 'No hay resultados'

          listadoRestaurantes.appendChild(noResultados)
        }
      }
    }
    function selecccionarRestaurante(e) {
      const restaurante = e.target

      //remover la clase previa
      const restaurantePrevio = document.querySelector(
        '.listado-restaurantes__restaurante--seleccionado',
      )
      if (restaurantePrevio) {
        restaurantePrevio.classList.remove(
          'listado-restaurantes__restaurante--seleccionado',
        )
      }

      restaurante.classList.add(
        'listado-restaurantes__restaurante--seleccionado',
      )
      restaurateHidden.value = restaurante.dataset.restauranteId
    }
  }
})()
