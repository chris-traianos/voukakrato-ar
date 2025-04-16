const marker = document.querySelector("#my-nft-marker");
const marker2 = document.querySelector("#my-nft-marker-2");
const box1 = document.querySelector(".box-1");
const box2 = document.querySelector(".box-2");

console.log(marker);

marker.addEventListener("markerFound", () => {
    box1.style.display = "block";
});

marker.addEventListener("markerLost", () => {
    box1.style.display = "none";
});

marker2.addEventListener("markerFound", () => {
    box2.style.display = "block";
});

marker2.addEventListener("markerLost", () => {
    box2.style.display = "none";
});
