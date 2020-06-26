import {Component, OnInit} from '@angular/core';
import {MediaService} from '../../service/media/media.service';
import {Media} from '../../model/media/media';

@Component({
    selector: 'app-media',
    templateUrl: './media.component.html',
    styleUrls: ['./media.component.css']
})
export class MediaComponent implements OnInit {

    mediaList: Media[];

    constructor(private mediaService: MediaService) {
        this.mediaList = [];
    }


    ngOnInit(): void {
        this.mediaService.retrieveAllMedias().subscribe(mediaList => {
                this.mediaList = mediaList;
            }
        );
    }
}
