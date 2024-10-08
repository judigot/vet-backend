/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IVaccinationSchedule } from "../../interfaces/interfaces";

type IBody = IVaccinationSchedule;

export const readVaccinationSchedule = async (): Promise<IBody[] | null> => {
  const result: IBody[] | null = await customFetch.get({
    url: `/vaccination_schedules`,
  });
  return result;
};

