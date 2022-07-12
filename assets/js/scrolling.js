let tabs = document.querySelectorAll('[data-toggle=tab]')

for (let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', () => {
        let tabID = tabs[i].getAttribute('href'),
            contents = document.querySelectorAll('.tab-pane'),
            content = document.querySelector(tabID)

            for (let j = 0; j < contents.length; j++) {
                if (!contents[j].classList.contains('d-none')) {
                    contents[j].classList.add('d-none')
                    console.log('here')
                }
            }

            content.classList.toggle('d-none')
    })
}