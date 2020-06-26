import {BrowserModule} from '@angular/platform-browser';
import {NgModule} from '@angular/core';

import {AppComponent} from './app.component';
import {NewsComponent} from './component/news/news.component';
import {ContentComponent} from './component/content/content.component';
import {MediaComponent} from './component/media/media.component';
import {HttpClientModule} from '@angular/common/http';
import {MenuComponent} from './component/menu/menu.component';

@NgModule({
    declarations: [
        AppComponent,
        NewsComponent,
        ContentComponent,
        MediaComponent,
        MenuComponent,
    ],
    imports: [
        BrowserModule,
        HttpClientModule
    ],
    providers: [],
    bootstrap: [AppComponent]
})
export class AppModule {
}
