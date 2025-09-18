page();
<section class="bg-section-background justify-center mx-6 my-6 rounded-xl sm:py-16">
whatever is inserted
</section>

  title("ourstory")
  <div class="text-center px-6">
    <h3 class="text-base font-semibold leading-7 text-primary">Saint Peter's Net:</h3>
    <p class="mt-2 text-4xl font-bold tracking-tight text-colour sm:text-5xl">Our Story</p>
  </div>

  base()
  <p class="mt-6 text-xl leading-8 text-colour">
    Born in Portsmouth, Ben, had a natural effinity with technology. At the age of 11 he built an elaborate powerpoint game until he was told of programming. Ben with his new found love went to university to achieve a computer science degree. Whilst looking for work Ben realised he could use his time to craft bespoke church websites.
  </p>
      
  quote()
  <div class="text-center px-6">
    <p class="mt-2 text-4xl font-bold tracking-tight text-colour sm:text-5xl">"For God so loved the world that he gave his one and only son that those who believe shall not perish but have enternal life<"/p>
    <h3 class="text-base font-semibold leading-7 text-primary">John 3:16</h3>
  </div>

  subtitle()
  <p class="mt-2 text-2xl font-bold tracking-tight sm:text-3xl">Anglican</p>
  
  textcontent()
  <div class="mx-auto max-w-2xl text-center md:text-left">
    what ever is inserted
  <div>

  img()
  <div class="flex justify-center md:justify-end md:order-2">
      <img class="h-auto max-w-full rounded-lg shadow-lg" 
        src="/assets/Fishing-net.jpg" 
        alt="Fishing net">
    </div>

  textcontent()
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-12 px-6">
  whatever is inserted
  </div>

whole
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-12 px-6">
    <div class="flex justify-center md:justify-end md:order-2">
      <img class="h-auto max-w-full rounded-lg shadow-lg" 
        src="/assets/Fishing-net.jpg" 
        alt="Fishing net">
    </div>

    <div class="mx-auto max-w-2xl text-center md:text-left">
      <p class="mt-6 text-xl leading-8 text-colour">
         Born in Portsmouth, Ben, had a natural effinity with technology. At the age of 11 he built an elaborate powerpoint game until he was told of programming. Ben with his new found love went to university to achieve a computer science degree. Whilst looking for work Ben realised he could use his time to craft bespoke church websites.</p>
      <p class="mt-6 text-xl leading-8 text-colour"> Ben set out with a challenge, to make church websites:</p>
      </p>
      <p class="font-bold text-xl">• Affordable</p>
      <p class="font-bold text-xl">• Usable</p>
      <p class="font-bold text-xl">• Mission focussed</p>
    </div>
  </div>
</section>


whole
<?
  page(
    title("Our Story");
    row(
      img("/assets/Fishing-net.jpg", 
      textContent(
        subtitle("Where it began");
        base("Born in Portsmouth, Ben, had a natural effinity with technology. At the age of 11 he built an elaborate powerpoint game until he was told of programming. Ben with his new found love went to university to achieve a computer science degree. Whilst looking for work Ben realised he could use his time to craft bespoke church websites.")
      );
    );
  );
?>