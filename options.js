function clicked(){
    let selected = document.getElementById("sortby").value
    
    const params = new URLSearchParams(location.search);
    params.set('sort', selected);
    window.history.replaceState({}, '', `${location.pathname}?${params}`);
    location.reload();
}

