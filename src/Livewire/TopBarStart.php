<?php

namespace TomatoPHP\FilamentSimpleTheme\Livewire;

use Filament\Pages\Page;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ManageRecords;
use Livewire\Component;

class TopBarStart extends Component
{
    public ?string $title = null;
    public ?string $icon = null;

    public function mount()
    {
        $currentPage = call_user_func(request()->getRouteResolver())->controller??null;

        if($currentPage){
            if(!$currentPage->getNavigationIcon()){
                if(in_array('getResource', get_class_methods($currentPage))){
                    $resource = app($currentPage::getResource());

                    if($resource){
                        $this->icon = $resource->getNavigationIcon();

                        if($currentPage instanceof ListRecords || $currentPage instanceof ManageRecords){
                            $this->title = $resource->getNavigationLabel();
                        }
                        else {
                            $this->title = $currentPage::getNavigationLabel();
                        }
                    }
                }
                else {
                    $this->title = $currentPage->getNavigationLabel();
                    $this->icon = $currentPage->getNavigationIcon();
                }
            }
            else {
                $this->title = $currentPage->getNavigationLabel();
                $this->icon = $currentPage->getNavigationIcon();
            }
        }


    }
    public function render()
    {
        return view('filament-simple-theme::topbar-start');
    }
}
