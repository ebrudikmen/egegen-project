import {Injectable} from '@angular/core';
import {HttpClient} from '@angular/common/http';

import {News} from '../../model/news/news';
import {Observable} from 'rxjs';
import {map} from 'rxjs/operators';

@Injectable({
    providedIn: 'root'
})
export class NewsService {

    newsUrl;

    constructor(private http: HttpClient) {
        this.newsUrl = 'http://127.0.0.1:8000/api/newses';
    }

    public retrieveAllNews(): Observable<News[]> {
        return this.http.get(this.newsUrl).pipe(
            map((response: any) => {
                return response.data;
            }));
    }
}
