<?php
require_once 'src/views/Shared/Header.php';
?>

<div class="bg-section-background justify-center mx-6 my-6 rounded-xl sm:py-16">
  <div class="mx-auto py-4 max-w-screen-sm bg-section-background text-center mb-8 lg:mb-16 rounded-lg">
    <h3 class="text-base font-semibold leading-7 text-primary">Saint Peter's Net:</h3>
  </div>
  <div class="px-48 ">
    <div class="justify-center bg-div-background rounded-lg shadow py-6 px-6 sm:flex">
      <div class="flex justify-center md:justify-start">
        <img class="h-auto max-w-xs rounded-lg shadow-lg"
          src="/src/files/Ben.jpg"
          alt="Ben">
      </div>
      <div class="p-5">
        <h3 class="text-4xl font-bold tracking-tight text-colour">Ben Hanley</h3>
        <span class="text-2xl italic text-colour">Professional Computer Nerd</span>
        <p class="mt-3 mb-4 text-xl font-light text-colour">A diligent Computer Science Graduate at Plymouth University. I’ve built strong interpersonal skills through group projects and client-facing roles, excelling in both leadership and supportive positions. Passionate about problem-solving, I approach challenges creatively to enhance design and efficiency. Advocating for critical thinking, I seek to understand the "why" behind decisions to strengthen or refine outcomes. Inspired by my faith, I aim to innovate technology that improves everyday life.</p>
        <div class="text-center md:text-left md:order-1">
          <p class="mt-2 py-6 text-2xl font-bold tracking-tight text-colour sm:text-3xl">More</p>
          <div class="flex w-full gap-1">
            <a href="mailto:benhanley321@gmail.com"
              class="flex-1 text-center px-2 py-2 text-sm font-medium bg-action hover:bg-action rounded-l-lg">
              Email
            </a>
            <a href="https://www.linkedin.com/in/ben-hanley-524b94253/"
              class="flex-1 text-center px-2 py-2 text-sm font-medium bg-action hover:bg-action">
              LinkedIn
            </a>
            <a href="https://github.com/b-a-hanley"
              class="flex-1 text-center px-2 py-2 text-sm font-medium bg-action hover:bg-action">
              Github
            </a>
            <a href=""
              class="flex-1 text-center px-2 py-2 text-sm font-medium bg-action hover:bg-action rounded-r-lg">
              PDF CV
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="justify-center mb-6 px-48">
    <p class="text-3xl underline py-4 font-bold text-colour">Skills</p>
    <div class="flex w-full gap-1">
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.1s]">
        Creative thinking
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.3s]">
        Problem solving
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.5s]">
        Stakeholder-Management
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.7s]">
        Teamwork
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.9s]">
        Debugging
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:1.1s]">
        Agile Development
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:1.3s]">
        Git Version Control
      </span>
    </div>
  </div>

  <style>
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fadeIn {
      animation: fadeIn 1s ease forwards;
    }
  </style>


  <div class="justify-center mb-6 px-48">
    <p class="text-3xl underline py-4 font-bold text-colour">Languages</p>
    <div class="flex flex-col gap-4 w-full">

      <div>
        <span class="block text-sm font-medium mb-1">PHP</span>
        <div class="w-full h-4 bg-white rounded-lg overflow-hidden">
          <div class="h-4 bg-primary rounded-lg w-0 animate-fill [animation-delay:0.2s]" style="--target-width: 60%;"></div>
        </div>
      </div>

      <div>
        <span class="block text-sm font-medium mb-1">Flutter (Dart)</span>
        <div class="w-full h-4 bg-white rounded-lg overflow-hidden">
          <div class="h-4 bg-primary rounded-lg w-0 animate-fill [animation-delay:0.4s]" style="--target-width: 55%;"></div>
        </div>
      </div>

      <div>
        <span class="block text-sm font-medium mb-1">C#</span>
        <div class="w-full h-4 bg-white rounded-lg overflow-hidden">
          <div class="h-4 bg-primary rounded-lg w-0 animate-fill [animation-delay:0.6s]" style="--target-width: 45%;"></div>
        </div>
      </div>

      <div>
        <span class="block text-sm font-medium mb-1">JavaScript/HTML/CSS</span>
        <div class="w-full h-4 bg-white rounded-lg overflow-hidden">
          <div class="h-4 bg-primary rounded-lg w-0 animate-fill [animation-delay:0.8s]" style="--target-width: 45%;"></div>
        </div>
      </div>

      <div>
        <span class="block text-sm font-medium mb-1">Python</span>
        <div class="w-full h-4 bg-white rounded-lg overflow-hidden">
          <div class="h-4 bg-primary rounded-lg w-0 animate-fill [animation-delay:1s]" style="--target-width: 30%;"></div>
        </div>
      </div>

      <div>
        <span class="block text-sm font-medium mb-1">Delphi</span>
        <div class="w-full h-4 bg-white rounded-lg overflow-hidden">
          <div class="h-4 bg-primary rounded-lg w-0 animate-fill [animation-delay:1.2s]" style="--target-width: 30%;"></div>
        </div>
      </div>

      <div>
        <span class="block text-sm font-medium mb-1">Java</span>
        <div class="w-full h-4 bg-white rounded-lg overflow-hidden">
          <div class="h-4 bg-primary rounded-lg w-0 animate-fill [animation-delay:1.4s]" style="--target-width: 25%;"></div>
        </div>
      </div>

      <div>
        <span class="block text-sm font-medium mb-1">SQL & NoSQL Databases</span>
        <div class="w-full h-4 bg-white rounded-lg overflow-hidden">
          <div class="h-4 bg-primary rounded-lg w-0 animate-fill [animation-delay:1.6s]" style="--target-width: 60%;"></div>
        </div>
      </div>

    </div>
  </div>

  <style>
    @keyframes fill {
      from {
        width: 0;
      }

      to {
        width: var(--target-width);
      }
    }

    .animate-fill {
      animation: fill 1.5s ease forwards;
    }
  </style>

  <div class="px-48 mb-6 py-6">
    <div class="justify-center py-6 bg-div-background rounded-lg shadow py-6 px-6">
      <p class="text-3xl underline py-4 font-bold text-colour">Experience</p>
      <div>
        <p class="text-2xl py-4 font-bold text-colour">Social Media Manager</p>
        <p class="text-xl font-bold text-colour">Dec 2022-Current</p>
        <p class="text-lg italic text-colour">Freelance, Remote</p>
        <ul>
          <li>• Creating content to engage a specific demographic using analytic data for growth.</li>
          <li>• Setting up sponsorship clients and providing content that matches to their needs.</li>
        </ul>
      </div>
      <div>
        <p class="text-2xl py-4 font-bold text-colour">Trainee Software Engineer Placement Year</p>
        <p class="text-xl font-bold text-colour">Sep 2023-Jul 2024</p>
        <p class="text-lg italic text-colour">ChurchSuite, Nottingham, Nottinghamshire</p>
        <ul>
          <li>• Worked in project cycles alongside other developers, developing, testing and debugging the ChurchSuite ecosystem.</li>
          <li>• Developed with and adapted design patterns to create new functionality, optimize code, and replace legacy systems.</li>
        </ul>
      </div>
      <div>
        <p class="text-2xl py-4 font-bold text-colour">Embedded Programming Consultant</p>
        <p class="text-xl font-bold text-colour">Aug 2022-Mar 2023</p>
        <p class="text-lg italic text-colour">Freelance, Plymouth, Devon</p>
        <ul>
          <li>• Effectively liaised with the client and proposed possible technical solutions with functional requirements.</li>
          <li>• Built an IoT application processing API information, performing fluid dynamics calculations to control GPIO components.</li>
        </ul>
      </div>
      <div>
        <p class="text-2xl py-4 font-bold text-colour">Teaching Assistant</p>
        <p class="text-xl font-bold text-colour">Jun 2020-Aug 2020</p>
        <p class="text-lg italic text-colour">Portchester Community School, Fareham, Hampshire</p>
        <ul>
          <li>• Tutored students individually and in small groups to reinforce and extend learning concepts.</li>
          <li>• Created lesson plans and led the class in activities.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="px-48 mb-6">
    <div class="justify-center py-6 bg-div-background rounded-lg shadow py-6 px-6">
      <p class="text-3xl underline py-4 font-bold text-colour">Education</p>
      <div>
        <p class="text-2xl py-4 font-bold text-colour">BSc (Hons) Computer Science & Placement Year (2:1 Average)</p>
        <p class="text-xl font-bold text-colour">Sep 2021- Current</p>
        <p class="text-lg italic text-colour">University of Plymouth, Plymouth, Devon</p>
        <ul>
          <li>• HCI, Usability and Visualization: 74%</li>
          <li>• Computing Group Project 79% - Built a JavaScript CBT website for a client. Led a team and earned commendation for client liaison.</li>
          <li>• Final Year Project 75% - Flutter Anxiety App with three healthcare stakeholders. Novel app design with user and psychological testing.</li>
        </ul>
      </div>
      <div>
        <p class="text-2xl py-4 font-bold text-colour">AWS Academy Cloud Foundations (85%)</p>
        <p class="text-xl font-bold text-colour">Mar 2025</p>
        <p class="text-lg italic text-colour">University of Plymouth, Plymouth, Devon</p>
        <ul>
          <li>• Cemented Knowledge of AWS cloud services, computing models and best practices.</li>
          <li>• Experience with core AWS services (EC2, EBS, RDS, IAM).</li>
        </ul>
      </div>
      <div>
        <p class="text-2xl py-4 font-bold text-colour">Google UX Design Professional Certificate</p>
        <p class="text-xl font-bold text-colour">June 2022- Current</p>
        <p class="text-lg italic text-colour">Freelance, Plymouth, Devon</p>
        <ul>
          <li>• UX Design: Emphasising, defining, and ideating – 92%</li>
          <li>• Building wireframes and Low-Fidelity Prototypes - 92%</li>
          <li>• UX Research and testing concepts – 89%</li>
        </ul>
      </div>
      <div>
        <p class="text-2xl py-4 font-bold text-colour">A Levels</p>
        <p class="text-xl font-bold text-colour">Sep 2019-Aug 2021</p>
        <p class="text-lg italic text-colour">Peter Symonds College, Winchester, Hampshire</p>
        <ul>
          <li>• MEI Mathematics - B, Physics - D</li>
          <li>• Computer Science (C) - Created a C# educational learning app designed for kinesthetic learners to learn calculus and projectile motion.</li>
        </ul>
      </div>
      <div>
        <p class="text-2xl py-4 font-bold text-colour">GSCEs</p>
        <p class="text-xl font-bold text-colour">Sep 2014-Aug 2019</p>
        <p class="text-lg italic text-colour">Portchester Community School, Fareham, Hampshire</p>
        <ul>
          <li>• Mathematics (7), English Language (7) and 8 others (7-4)</li>
          <li>• Certificate in Digital applications (B) - Built a Construct 2 platform game for the mature adults. Game utilised memory techniques to reduce symptoms of dementia.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="px-48 mb-6">
    <div class="justify-center py-6 bg-div-background rounded-lg shadow py-6 px-6">
      <p class="text-3xl underline py-4 font-bold text-colour">Volunteering</p>
      <div>
        <p class="text-xl py-4 text-colour">Elected in Plymouth University CU</p>
        <ul>
          <li class="text-xl">• Tech Lead 2022-2025</li>
          <li class="text-xl">• Gazebo Outreach Coordinator 2024-2025</li>
          <li class="text-xl">• Outreach Coordinator 2022-2023</li>
        </ul>
        <p class="text-xl py-4 text-colour">Wickham Festival Hospitality tent 2018-Current</p>
        <p class="text-xl text-colour">Stream Engineer for Waltham Chase church 2020-2022</p>
        <p class="text-xl text-colour">Elected Portchester Community School Deputy Boy 2018-2019</p>
      </div>
    </div>
  </div>
  <div class="justify-center mb-6 px-48">
    <p class="text-3xl underline py-4 font-bold text-colour">Awards</p>
    <div class="flex w-full gap-1">
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.1s]">
        Outstanding Student Volunteer Award UPSU
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.3s]">
        National Citizen Service
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.3s]">
        Third place Hampshire Volleyball Club Tournament 16s
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.5s]">
        Faith and Football Buisness Enterprise challenge
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.9s]">
        Bronze Duke of Edinburgh
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:1.1s]">
        Grade 4 Classical Guitar
      </span>
    </div>
  </div>
  <div class="justify-center mb-6 px-48">
    <p class="text-3xl underline py-4 font-bold text-colour">Awards</p>
    <div class="flex w-full gap-1">
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.1s]">
        Member of University societies:
        <ul class="text-left px-4">
          <li>• Acapella</li>
          <li>• Choir</li>
          <li>• Volleyball</li>
          <li>• Christian Union</li>
        </ul>
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.3s]">
        Neurodivergence in Psychology
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.3s]">
        Philosophy and Theology
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:0.5s]">
        Running and Volleyball
      </span>
      <span class="flex-1 text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:1.1s]">
        Music performance and production
      </span>
    </div>
  </div>

  <style>
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fadeIn {
      animation: fadeIn 1s ease forwards;
    }
  </style>
</div>
<?php
require_once 'src/views/Shared/Footer.php';
?>