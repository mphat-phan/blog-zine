function handleQueryParams(event) {
    event.preventDefault();
    let url = new URL(document.location);

    const [key, value] = event.srcElement
        .getAttribute("href")
        .substr(1)
        .split("=");

    url.searchParams.set(key, value);
    console.log(url);
    window.location.href = url.href;
}
