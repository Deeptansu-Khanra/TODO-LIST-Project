window.onload = ()=>{
    const dateBox = document.querySelector('.date');
    const date = new Date();
    const day = date.getDate();
    console.log(day);
    const month = date.getMonth();
    console.log(month);
    const year = date.getFullYear();
    console.log(year);
    console.log(date);

    dateBox.innerHTML = 'Date : <span>'+day+ '-' + month+ '-' + year + '</span>';
}
