const apiBaseUrl = location.origin + "/ntust-ctf/public/api/v1";

async function send(method, path, body) {
    const headers = new Headers();
    headers.append("Content-Type", "application/json");
    headers.append("Accept", "application/json");
    if (localStorage.getItem("hasLogin") === "1" && localStorage.getItem("token") !== null) {
        headers.append("Authorization", "Bearer " + localStorage.getItem("token"));
    }
    const response = await fetch(apiBaseUrl + path, {
        method,
        headers,
        body: JSON.stringify(body),
    });
    return await response.json();
}
