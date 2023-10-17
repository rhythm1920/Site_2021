const CONTACT_DETAILS = [
  {
      name: "Manish S.",
      contact: "+91 95000 18839",
      number: "+91-9500018839"
  },
  {
      name: "Vedant Dave",
      contact: "+91 96194 45999",
      number: "+91-9619445999"
  }
]

const contact_details = document.querySelector("#contact-details")

CONTACT_DETAILS.map((person) => {
  contact_details.innerHTML += `
  <p class="manager-contact mb-2">
 ${person.name} <br />
  <a href="tel:${person.number}">${person.contact}</a>
</p>`
console.log(person.name)
})
