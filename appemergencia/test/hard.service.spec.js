const HardWorkingService = require('./../services/service.service.ts');

describe('Hard Working Service', ()=>{
    it('Should be true', ()=>{
        console.log(HardWorkingService);
        expect(true).toBe(true);
    });
});