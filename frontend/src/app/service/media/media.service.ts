import {Injectable} from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {Media} from '../../model/media/media';
import {Observable} from 'rxjs';
import {map} from 'rxjs/operators';

@Injectable({
    providedIn: 'root'
})
export class MediaService {

    mediaUrl;

    constructor(private  http: HttpClient) {
        this.mediaUrl = 'http://127.0.0.1:8000/api/medias';
    }

    public retrieveAllMedias(): Observable<Media[]> {
        return this.http.get(this.mediaUrl).pipe(
            map((response: any) => {
                return response.data;
            })
        );
    }
}
