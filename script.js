
function home() {
    document.querySelectorAll(".recipeblock").forEach(el => {
        el.style.display = "block";
    });

    document.querySelectorAll(".fullrecipe").forEach(el => {
        el.style.display = "none";
    });
}
function fullrecipe(el) {
    let id = el.dataset.id; 

    document.querySelectorAll(".recipeblock").forEach(e => e.style.display = "none");

    document.querySelectorAll(".fullrecipe").forEach(e => e.style.display = "none");
    document.querySelector(".fullrecipe[data-id='" + id + "']").style.display = "block";
}
window.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.tag').forEach(tagEl => {
        tagEl.addEventListener('click', e => {
            e.stopPropagation(); // prevents triggering fullrecipe
            let tag = tagEl.dataset.tag;
            document.querySelectorAll('.recipeblock').forEach(block => {
                let tagsText = block.querySelector('.tags').innerText.trim();
                let tags = tagsText.split(/\s+/);
                block.style.display = tags.includes(tag) ? 'block' : 'none';
            });
        });
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('recipeSearch');

    searchInput.addEventListener('input', () => {
        const filter = searchInput.value.toLowerCase();

        document.querySelectorAll('.recipeblock').forEach(recipe => {
            const name = recipe.querySelector('.name').innerText.toLowerCase();
            recipe.style.display = name.includes(filter) ? 'block' : 'none';
        });
    });
});