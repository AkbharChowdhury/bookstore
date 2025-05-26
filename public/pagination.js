  document.addEventListener('htmx:load', function(event){
        let paginationLinks = document.querySelectorAll('[role="navigation"] a');
        if (paginationLinks.length === 0 ) return;
        paginationLinks.forEach(el =>{
            let url = el.getAttribute('href');
            el.setAttribute('hx-get', url);
            el.setAttribute('hx-target', '#book_container');
            el.setAttribute('hx-swap', 'outerHTML')
            htmx.process(el);
        })
      })