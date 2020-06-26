import {Component, OnInit} from '@angular/core';
import {News} from '../../model/news/news';
import {NewsService} from '../../service/news/news.service';

@Component({
    selector: 'app-news',
    templateUrl: './news.component.html',
    styleUrls: ['./news.component.css']
})
export class NewsComponent implements OnInit {

    newsList: News[];

    constructor(private newsService: NewsService) {
        this.newsList = [];
    }

    ngOnInit(): void {
        this.newsService.retrieveAllNews().subscribe(newsList => {
                this.newsList = newsList;
            }
        );
    }

}
