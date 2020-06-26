import {Injectable} from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {Content} from '../../model/content/content';
import {Observable} from 'rxjs';
import {map} from 'rxjs/operators';

@Injectable({
    providedIn: 'root'
})
export class ContentService {

    contentUrl;

    constructor(private http: HttpClient) {
        this.contentUrl = 'http://127.0.0.1:8000/api/contents';
    }

    public retrieveAllContents(): Observable<Content[]> {
        return this.http.get(this.contentUrl).pipe(
            map((response: any) => {
                return response.data;
            }));
    }
}
