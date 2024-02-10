
const artists = [
    { "name": "sean walker", "role": "vocals/guitar" },
    { "name": "lloyd culpepper", "role": "bass" },
    { "name": "george carey", "role": "drums" },
    { "name": "tom ponting", "role": "guitar" }
];

const shuffledArtists = (() => {
    return artists.sort(() => Math.random() - 0.5);
});

const drawCredits = (target) => {
    const wrapper = document.getElementById(target);
    const roles = document.createElement('div');
    const people = document.createElement('div');

    roles.classList.add('credits-details', 'flex-col');
    people.classList.add('credits-details', 'flex-col');

    shuffledArtists().forEach(artist => {
        const role = document.createElement('span');
        const person = document.createElement('span');
        role.classList.add('role');
        person.classList.add('person');
        role.textContent = artist.role;
        person.textContent = artist.name;
        roles.appendChild(role);
        people.appendChild(person);
    });

    wrapper.appendChild(roles);
    wrapper.appendChild(people);
}

export { drawCredits };