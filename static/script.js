input.oninput = (e) => {
    document.getElementById('root').innerText = '~$ ' + e.target.value + '_'
}