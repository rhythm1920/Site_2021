import { TEAM_MEMBERS_DETAILS, TEAM_HEADS_DETAILS, TEAM_MANAGERS_DETAILS } from "./teamDetails.js"

const member_container = document.querySelector("#members-details")
const heads_container = document.querySelector("#heads-details")
const manager_container = document.querySelector("#manager-details")
TEAM_MANAGERS_DETAILS.map((manager) =>{

  manager_container.innerHTML += `<div class="col col-xl-3 text-center">
              <div class="media mx-auto">
                <img
                  src="${manager.img}"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a
                    href="${manager.facebook}"
                    target="_blank"
                    ><i class="fab fa-facebook"></i
                  ></a>
                  <a
                    href="${manager.linkedin}"
                    
                    target="_blank"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                  <a
                    href="mailto:${manager.mail}"
                    target="_blank"
                    ><i class="fas fa-envelope"></i
                  ></a>
                </div>
              </div>
              <h3 class="pt-1">${manager.name}</h3>
              <h4 class="pt-1">${manager.designation1}</h4>
              <h4>${manager.designation2}</h4>
              <h4>${manager.designation3}</h4>
            </div>`
})

TEAM_HEADS_DETAILS.map((head)=>{
  heads_container.innerHTML+=` 
  <div class="col col-xl-3 text-center" id="heads-details">             
  <div class="media mx-auto">
  <img
    src="${head.img}"
    alt="avatar"
    class="image"
  />
  <div class="team-contact fs-3 justify-content-around d-flex">
    <a
      href="${head.facebook}"
      target="_blank"
      ><i class="fab fa-facebook"></i
    ></a>
    <a
      href="${head.linkedin}"
      target="_blank"
      ><i class="fab fa-linkedin-in"></i
    ></a>
    <a href="mailto:${head.mail}" target="_blank"
      ><i class="fas fa-envelope"></i
    ></a>
  </div>
</div>
<h3 class="pt-1">${head.name}</h3>
<h4 class="pt-1">${head.designation1}</h4>
<h4 class="pt-1">${head.designation2}</h4>
</div>
</div>`
})

TEAM_MEMBERS_DETAILS.map((member) => {
    member_container.innerHTML += `
    <div class="col col-xl-3 text-center p-4">
    <div class="media mx-auto">
      <img
        src="${member.img}"
        alt="avatar"
        class="member-image"
      />
      <div class="team-contact fs-3 justify-content-around d-flex">
        <a
          href="${member.facebook}"
          target="_blank"
          ><i class="fab fa-facebook"></i
        ></a>
        <a
          href="${member.linkedin}"
          target="_blank"
          ><i class="fab fa-linkedin-in"></i
        ></a>
        <a href="mailto:${member.mail}" target="_blank"
          ><i class="fas fa-envelope"></i
        ></a>
      </div>
    </div>
    <h3 class="pt-1">${member.name}</h3>
    <h4>${member.designation}</h4>
  </div>`
})