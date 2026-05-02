<?php
require_once 'src/Views/Shared/Header.php';
?>

<div class="bg-section-background mx-4 my-6 rounded-xl sm:py-16">
  <div class="px-4 py-4 sm:px-6 lg:px-12">
    <div class="flex flex-col sm:flex-row justify-center shadow-lg bg-div-background rounded-lg py-6 px-4 sm:px-6">
      <div class="grid grid-cols-1 gap-8 items-center py-3 px-3 md:grid-cols-2">  
        <img
          class=
            "h-auto max-w-full rounded-lg shadow-lg"
          src="/assets/Ben.jpg"
        />
        <div class="mx-auto max-w-2xl text-center text-2xl md:text-left">
          <h3 class="text-3xl sm:text-4xl font-bold tracking-tight text-colour">
            Ben Hanley
          </h3>
          <span class="text-xl sm:text-2xl italic text-colour">
            Professional Computer Nerd
          </span>
          <p class="mt-3 mb-4 text-base sm:text-lg font-light text-colour">
            A software developer and Computer Science graduate of the University of Plymouth, with experience across the Christian and Healthcare sectors. I have developed strong interpersonal skills through group projects and client-facing roles, working effectively in both leadership and supporting positions.
          </p>
          <p class="mt-3 mb-4 text-base sm:text-lg font-light text-colour">
            As a freelance web developer, I focus on usability and empathetic design to create engaging, user-centred church websites. I am passionate about problem-solving and approach challenges creatively to improve both design and efficiency. I prioritise critical thinking and seek to understand the reasoning behind decisions in order to refine and strengthen outcomes. Inspired by my Christian faith, I aim to develop technology that meaningfully improves everyday life.
          </p>

          <div class="flex flex-col sm:flex-row gap-2 w-full">
            <a
              href="mailto:benhanley321@gmail.com"
              class="flex-1 text-center px-2 py-2 text-sm font-medium bg-action hover:bg-action rounded-t-lg sm:rounded-l-lg sm:rounded-tr-none sm:rounded-br-none"
            >
              Email
            </a>

            <a
              href="https://www.linkedin.com/in/ben-hanley-524b94253/"
              class="flex-1 text-center px-2 py-2 text-sm font-medium bg-action hover:bg-action rounded-none"
            >
              LinkedIn
            </a>

            <a
              href="/cv.pdf"
              class="flex-1 text-center px-2 py-2 text-sm font-medium bg-action hover:bg-action rounded-b-lg sm:rounded-r-lg sm:rounded-tl-none sm:rounded-bl-none"
            >
              PDF CV
            </a>
          </div>
        </div>
      </div>
</div>
</div>
  <!-- Skills Section -->
  <div class="px-4 sm:px-6 lg:px-12 mt-8">
    <p class="text-2xl sm:text-3xl underline py-4 font-bold text-colour text-center">Skills</p>
    <div class="flex flex-wrap gap-2 justify-center">
      <?php
      $skills = ["Creative thinking", "Programming", "User design", "Branding", "Problem solving", "Client liason", "Teamwork"];
      $delay = 0.1;
      foreach ($skills as $skill) {
        echo '<span class="text-center px-2 py-2 text-sm font-medium bg-white rounded-lg opacity-0 animate-fadeIn [animation-delay:' . $delay . 's]">' . $skill . '</span>';
        $delay += 0.2;
      }
      ?>
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

  <!-- Experience Section -->
  <div class="px-4 sm:px-6 lg:px-12 mt-8">
    <div class="bg-div-background rounded-lg shadow py-6 px-4 sm:px-6">
      <p class="text-2xl sm:text-3xl underline py-4 font-bold text-colour text-center">Experience</p>
      <?php
      $experience = [
        ["title" => "Software Developer", "date" => "Sep 2025-Current", "location" => "Blueteq, Havant, Hampshire", "details" => ["Develop & maintain an understanding of Blueteq core systems & business practices", "Contributed ideas, suggestions, and thoughts to improve the efficiency, performance, and reliability of existing & new systems"]],
        ["title" => "Social Media Manager", "date" => "Dec 2022-Current", "location" => "Freelance, Remote", "details" => ["Creating content to engage a specific demographic using analytic data for growth.", "Setting up sponsorship clients and providing content that matches to their needs."]],
        ["title" => "Trainee Software Engineer Placement Year", "date" => "Sep 2023-Jul 2024", "location" => "ChurchSuite, Nottingham, Nottinghamshire", "details" => ["Worked in project cycles alongside other developers, developing, testing and debugging the ChurchSuite ecosystem.", "Developed with and adapted design patterns to create new functionality, optimize code, and replace legacy systems."]],
        ["title" => "Embedded Programming Consultant", "date" => "Aug 2022-Mar 2023", "location" => "Freelance, Plymouth, Devon", "details" => ["Effectively liaised with the client and proposed possible technical solutions with functional requirements.", "Built an IoT application processing API information, performing fluid dynamics calculations to control GPIO components."]],
      ];
      foreach ($experience as $exp) {
        echo '<div class="mt-4">
                  <p class="text-xl sm:text-2xl font-bold text-colour">' . $exp["title"] . '</p>
                  <p class="text-lg sm:text-xl font-bold text-colour">' . $exp["date"] . '</p>
                  <p class="text-base sm:text-lg italic text-colour">' . $exp["location"] . '</p>
                  <ul class="list-disc list-inside mt-2 text-colour">';
        foreach ($exp["details"] as $item) {
          echo '<li>' . $item . '</li>';
        }
        echo '</ul></div>';
      }
      ?>
    </div>
  </div>

  <!-- Education Section -->
  <div class="px-4 sm:px-6 lg:px-12 mt-8">
    <div class="bg-div-background rounded-lg shadow py-6 px-4 sm:px-6">
      <p class="text-2xl sm:text-3xl underline py-4 font-bold text-colour text-center">Education</p>

      <?php
      $education = [
        ["title" => "BSc (Hons) Computer Science & Placement Year (2:1 Average)", "date" => "Sep 2021- Current", "location" => "University of Plymouth, Plymouth, Devon", "details" => ["HCI, Usability and Visualization: 74%", "Computing Group Project 79% - Built a JavaScript CBT website for a client. Led a team and earned commendation for client liaison.", "Final Year Project 75% - Flutter Anxiety App with three healthcare stakeholders. Novel app design with user and psychological testing."]],
        ["title" => "AWS Academy Cloud Foundations (85%)", "date" => "Mar 2025", "location" => "University of Plymouth, Plymouth, Devon", "details" => ["Cemented Knowledge of AWS cloud services, computing models and best practices.", "Experience with core AWS services (EC2, EBS, RDS, IAM)."]],
        ["title" => "Google UX Design Professional Certificate", "date" => "June 2022- Current", "location" => "Freelance, Plymouth, Devon", "details" => ["UX Design: Emphasising, defining, and ideating – 92%", "Building wireframes and Low-Fidelity Prototypes - 92%", "UX Research and testing concepts – 89%"]],
      ];
      foreach ($education as $edu) {
        echo '<div class="mt-4">
                  <p class="text-xl sm:text-2xl font-bold text-colour">' . $edu["title"] . '</p>
                  <p class="text-lg sm:text-xl font-bold text-colour">' . $edu["date"] . '</p>
                  <p class="text-base sm:text-lg italic text-colour">' . $edu["location"] . '</p>
                  <ul class="list-disc list-inside mt-2 text-colour">';
        foreach ($edu["details"] as $item) {
          echo '<li>' . $item . '</li>';
        }
        echo '</ul></div>';
      }
      ?>
    </div>
  </div>
</div>

<?php
require_once 'src/Views/Shared/Footer.php';
?>