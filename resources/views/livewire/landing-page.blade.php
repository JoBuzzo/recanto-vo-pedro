<main>
    <x-landing-page.banner :setting="$setting"/>
    <x-landing-page.what-we-offer :setting="$setting"/>
    <x-landing-page.explore-the-space />
    <x-landing-page.details :setting="$setting"/>
    <x-landing-page.rules :setting="$setting"/>

    <livewire:make-reservation :setting="$setting"/>
</main>
