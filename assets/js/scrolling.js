let tabs = document.querySelectorAll('[data-toggle=tab]')

for (let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', () => {
        let tabID = tabs[i].getAttribute('href'),
            contents = document.querySelectorAll('.tab-pane'),
            content = document.querySelector(tabID)

            for (let j = 0; j < contents.length; j++) {
                if (!contents[j].classList.contains('d-none')) {
                    contents[j].classList.add('d-none')
                }
            }

            for (let k = 0; k < tabs.length; k++) {
                tabs[k].classList.remove('bg-orange')
            }

            tabs[i].classList.add('bg-orange')

            content.classList.toggle('d-none')
    })
}

let tabs2 = document.querySelectorAll('.toggle-tab')

for (let i = 0; i < tabs2.length; i++) {
    tabs2[i].addEventListener('click', () => {
        let tabID = tabs2[i].getAttribute('href'),
            contents = document.querySelectorAll('.tab-pane2'),
            content = document.querySelector(tabID)

            for (let j = 0; j < contents.length; j++) {
                if (!contents[j].classList.contains('d-none')) {
                    contents[j].classList.add('d-none')
                }
            }

            for (let k = 0; k < tabs2.length; k++) {
                tabs2[k].classList.remove('bg-orange')
            }

            tabs2[i].classList.add('bg-orange')

            content.classList.toggle('d-none')
    })
}
